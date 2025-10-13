<?php

namespace App\Filament\Resources\Matrimonials\Pages;

use App\Filament\Resources\Matrimonials\MatrimonialResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageMatrimonials extends ManageRecords
{
    protected static string $resource = MatrimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
