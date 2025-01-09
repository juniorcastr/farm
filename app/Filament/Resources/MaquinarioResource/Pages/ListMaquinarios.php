<?php

namespace App\Filament\Resources\MaquinarioResource\Pages;

use App\Filament\Resources\MaquinarioResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaquinarios extends ListRecords
{
    protected static string $resource = MaquinarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
