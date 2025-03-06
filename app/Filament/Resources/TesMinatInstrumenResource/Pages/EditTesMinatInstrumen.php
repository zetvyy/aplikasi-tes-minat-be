<?php

namespace App\Filament\Resources\TesMinatInstrumenResource\Pages;

use App\Filament\Resources\TesMinatInstrumenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTesMinatInstrumen extends EditRecord
{
    protected static string $resource = TesMinatInstrumenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
