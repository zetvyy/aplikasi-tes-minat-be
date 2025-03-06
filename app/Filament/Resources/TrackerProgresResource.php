<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrackerProgresResource\Pages;
use App\Filament\Resources\TrackerProgresResource\RelationManagers;
use App\Models\TrackerProgres;
use App\Models\TrackerProgress;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrackerProgresResource extends Resource
{
    protected static ?string $model = TrackerProgress::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-magnifying-glass';

    protected static ?string $navigationGroup = 'Tracker Progress';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTrackerProgres::route('/'),
            'create' => Pages\CreateTrackerProgres::route('/create'),
            'edit' => Pages\EditTrackerProgres::route('/{record}/edit'),
        ];
    }
}
