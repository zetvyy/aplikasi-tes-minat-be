<?php

namespace App\Filament\Resources\LearningListResource\Pages;

use App\Filament\Resources\LearningListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLearningLists extends ListRecords
{
    protected static string $resource = LearningListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
