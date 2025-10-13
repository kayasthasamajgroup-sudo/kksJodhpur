<?php

namespace App\Filament\Resources\Matrimonials;

use App\Filament\Resources\Matrimonials\Pages\ManageMatrimonials;
use App\Models\Matrimonial;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;


class MatrimonialResource extends Resource
{
    protected static ?string $model = Matrimonial::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('person_name')->required(),
                TextInput::make('age')->numeric()->required(),
                Select::make('marital_status')
                    ->options([
                        'unmarried' => 'Unmarried',
                        'widow/widower' => 'Widow/Widower',
                        'divorced' => 'Divorced',
                        'separated' => 'Separated',
                    ])
                    ->required(),
                TextInput::make('email')->email()->unique(ignoreRecord: true),
                TextInput::make('phone'),
                TextInput::make('qualification'),
                TextInput::make('profession'),
                TextInput::make('hobbies'),
                TextInput::make('postal_address'),
                FileUpload::make('pic')
                ->label('Profile Picture')
    ->image()
    ->directory('uploads/matrimonials')
    ->disk('public')   // important: disk specify karo
    ->visibility('public')// make it accessible
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('person_name')->searchable(),
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
            'index' => ManageMatrimonials::route('/'),
        ];
    }
}
