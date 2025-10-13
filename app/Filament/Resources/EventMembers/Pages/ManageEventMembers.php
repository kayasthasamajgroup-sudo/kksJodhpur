<?php

namespace App\Filament\Resources\EventMembers\Pages;

use App\Filament\Resources\EventMembers\EventMemberResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageEventMembers extends ManageRecords
{
    protected static string $resource = EventMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
