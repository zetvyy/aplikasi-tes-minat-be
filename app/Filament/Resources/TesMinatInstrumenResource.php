<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TesMinatInstrumenResource\Pages;
use App\Filament\Resources\TesMinatInstrumenResource\RelationManagers;
use App\Models\TesMinatInstrumen;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TesMinatInstrumenResource extends Resource
{
    protected static ?string $model = TesMinatInstrumen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('label')
                    ->required()
                    ->maxLength(255),
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
            'index' => Pages\ListTesMinatInstrumens::route('/'),
            'create' => Pages\CreateTesMinatInstrumen::route('/create'),
            'edit' => Pages\EditTesMinatInstrumen::route('/{record}/edit'),
        ];
    }
}
