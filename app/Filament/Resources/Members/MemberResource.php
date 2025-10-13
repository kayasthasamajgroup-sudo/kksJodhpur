<?php

namespace App\Filament\Resources\Members;

use App\Filament\Resources\Members\Pages\ManageMembers;
use App\Models\Member;
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

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('member_name')->required(),
            TextInput::make('spouse_name')->required(),
            TextInput::make('age')->required(),
            TextInput::make('dob')->required(),
            TextInput::make('father_name')->required(),
            TextInput::make('mother_name')->required(),
            TextInput::make('gotra')->required(),
         Select::make('sub_caste')
            ->label('Sub Caste')
            ->required()
            ->options([
                'baniya' => 'Baniya',
                'jain' => 'Jain',
                'gupta' => 'Gupta',
                'maheshwari' => 'Maheshwari',
                'agarwal' => 'Agarwal',
                'marwari' => 'Marwari',
                'others' => 'Others',
            ])
            ->searchable(),
            TextInput::make('email')->email()->required(),
            TextInput::make('phone'),
            TextInput::make('qualification')->required(),
            TextInput::make('profession')->required(),
            TextInput::make('parental_place')->required(),
            TextInput::make('postal_address')->required(),
            TextInput::make('office_address')->required(),
            TextInput::make('office_address')->required(),
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
    FileUpload::make('picPath')
    ->label('Profile Picture')
    ->image() // image type restrict
    ->directory('profile-pics') // storage/app/profile-pics me save hoga
    ->maxSize(1024) // max 1MB
    ,
    FileUpload::make('signPath')
    ->label('Signature Picture')
    ->image() // image type restrict
    ->directory('sign-pics') // storage/app/profile-pics me save hoga
    ->maxSize(1024) // max 1MB
    ,
    FileUpload::make('receiptPath')
    ->label('receipt Picture')
    ->image() // image type restrict
    ->directory('receipt-pics') // storage/app/profile-pics me save hoga
    ->maxSize(1024) // max 1MB
    ,
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('member_name')->searchable(),
                TextColumn::make('email')
              
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
            'index' => ManageMembers::route('/'),
        ];
    }
}
