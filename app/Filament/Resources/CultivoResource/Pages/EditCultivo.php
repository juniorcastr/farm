<?php

namespace App\Filament\Resources\CultivoResource\Pages;

use App\Filament\Resources\CultivoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCultivo extends EditRecord
{
    protected static string $resource = CultivoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
