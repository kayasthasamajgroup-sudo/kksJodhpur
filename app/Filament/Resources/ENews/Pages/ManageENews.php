<?php

namespace App\Filament\Resources\ENews\Pages;

use App\Filament\Resources\ENews\ENewsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageENews extends ManageRecords
{
    protected static string $resource = ENewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
