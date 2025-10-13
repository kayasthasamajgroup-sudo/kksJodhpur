<?php

namespace App\Filament\Resources\EventMembers;

use App\Filament\Resources\EventMembers\Pages\ManageEventMembers;
use App\Models\EventMember;
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

class EventMemberResource extends Resource
{
    protected static ?string $model = EventMember::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('member_name')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('phone'),
                TextInput::make('event_name'),
                TextInput::make('home_address')->required(),
                Select::make('family_members')
        ->label('Family Members')
        ->required()
        ->options([
            '1' => '1 Member',
            '2' => '2 Members',
            '3' => '3 Members',
            '4' => '4 Members',
            '5' => '5 Members',
            '6' => '6 Members',
            '7' => '7 Members',
            '8+' => '8 or More',
        ])
        ->searchable(),
        FileUpload::make('receipt_photo')
        ->label('Receipt Picture')
        ->image() // image type restrict
        ->directory('uploads') 
        ->disk('public') 
        ->maxSize(1024) // max 1MB
        ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('member_name')->searchable(),
                TextColumn::make('email'),
                TextColumn::make('event_name')->searchable(),
                TextColumn::make('phone'),
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
            'index' => ManageEventMembers::route('/'),
        ];
    }
}
