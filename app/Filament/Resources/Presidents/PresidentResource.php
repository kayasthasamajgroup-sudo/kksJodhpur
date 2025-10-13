<?php

namespace App\Filament\Resources\Presidents;

use App\Filament\Resources\Presidents\Pages\ManagePresidents;
use App\Models\President;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class PresidentResource extends Resource
{
    protected static ?string $model = President::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Name')->required(),
                TextInput::make('term')->label('Term (e.g., 2020-2025)'),
              
                FileUpload::make('photo')
                ->label('president photo')
                ->image()
                ->directory('uploads')
                ->disk('public') 
                ->maxSize(1024)
            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
TextColumn::make('name')->searchable(),
TextColumn::make('term')->sortable(),
ImageColumn::make('photo')->label('Photo'),
TextColumn::make('created_at')->dateTime(),
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
            'index' => ManagePresidents::route('/'),
        ];
    }
}
