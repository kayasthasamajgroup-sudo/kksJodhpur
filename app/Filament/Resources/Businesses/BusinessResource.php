<?php

namespace App\Filament\Resources\Businesses;

use App\Filament\Resources\Businesses\Pages\ManageBusinesses;
use App\Models\Business;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
class BusinessResource extends Resource
{
    protected static ?string $model = Business::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required()->maxLength(255),
                TextInput::make('owner_name')->required()->maxLength(255),
                TextInput::make('category')->maxLength(100),
                Textarea::make('description'),
              TextInput::make('email')->email(),
                TextInput::make('phone'),
                TextInput::make('city'),
                TextInput::make('state'),
             TextInput::make('country'),
                TextInput::make('website')->url(),
                FileUpload::make('logo')
                ->label('Business Logo')
                ->image() // sirf images allow karega
                ->directory('logos') // public disk ke under storage/app/public/logos me save hoga
                ->disk('public') // ensure correct disk
                ->maxSize(100) // max 100 KB
                ->required() // agar required ho to
                ->imagePreviewHeight('150') // admin panel me preview height
                ->hint('Max size 100KB, JPG/PNG/WebP only'),
            Toggle::make('is_active')->label('Active'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                ->disk('public')       
                
                ->label('Logo'),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('owner_name')->sortable()->searchable(),
              TextColumn::make('category')->sortable(),
               TextColumn::make('city')->sortable(),
                IconColumn::make('is_active')->boolean(),
               TextColumn::make('created_at')->dateTime(),
                //
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
            'index' => ManageBusinesses::route('/'),
        ];
    }
}
