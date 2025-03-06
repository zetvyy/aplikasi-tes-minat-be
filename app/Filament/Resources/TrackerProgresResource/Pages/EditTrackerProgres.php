<?php

namespace App\Filament\Resources\TrackerProgresResource\Pages;

use App\Filament\Resources\TrackerProgresResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrackerProgres extends EditRecord
{
    protected static string $resource = TrackerProgresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
