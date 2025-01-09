<?php

namespace App\Filament\Resources\MaquinarioResource\Pages;

use App\Filament\Resources\MaquinarioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaquinario extends EditRecord
{
    protected static string $resource = MaquinarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
