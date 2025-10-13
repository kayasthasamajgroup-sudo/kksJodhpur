<?php

namespace App\Filament\Resources\Presidents\Pages;

use App\Filament\Resources\Presidents\PresidentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePresidents extends ManageRecords
{
    protected static string $resource = PresidentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
