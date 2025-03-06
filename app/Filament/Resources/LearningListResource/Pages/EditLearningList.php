<?php

namespace App\Filament\Resources\LearningListResource\Pages;

use App\Filament\Resources\LearningListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLearningList extends EditRecord
{
    protected static string $resource = LearningListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
