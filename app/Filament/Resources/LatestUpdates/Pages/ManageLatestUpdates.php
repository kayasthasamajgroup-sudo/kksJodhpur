<?php

namespace App\Filament\Resources\LatestUpdates\Pages;

use App\Filament\Resources\LatestUpdates\LatestUpdateResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageLatestUpdates extends ManageRecords
{
    protected static string $resource = LatestUpdateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
