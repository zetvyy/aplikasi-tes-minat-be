<?php

namespace App\Filament\Resources\TesMinatInstrumenResource\Pages;

use App\Filament\Resources\TesMinatInstrumenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTesMinatInstrumens extends ListRecords
{
    protected static string $resource = TesMinatInstrumenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
