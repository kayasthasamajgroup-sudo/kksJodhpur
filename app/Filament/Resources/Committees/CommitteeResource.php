<?php

namespace App\Filament\Resources\Committees;

use App\Filament\Resources\Committees\Pages\ManageCommittees;
use App\Models\Committee;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\Radio;
use Filament\Tables\Columns\TextColumn;

class CommitteeResource extends Resource
{
    protected static ?string $model = Committee::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
            

                Radio::make('committee')
                    ->label('Committee')  // form me label
                    ->options([
                        'core' => 'Core Committee',
                        'female' => 'Female Committee',
                        'youth' => 'Youth Committee',
                    ])
                    ->required(),
                FileUpload::make('image')
                ->label('banner')
    ->image()
    ->directory('uploads')
    ->disk('public')   // important: disk specify karo
    ->visibility('public')// make it accessible
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('committee'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageCommittees::route('/'),
        ];
    }
}
