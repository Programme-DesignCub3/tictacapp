<?php

namespace App\Filament\Resources\GameScores;

use App\Filament\Resources\GameScores\Pages\CreateGameScore;
use App\Filament\Resources\GameScores\Pages\EditGameScore;
use App\Filament\Resources\GameScores\Pages\ListGameScores;
use App\Filament\Resources\GameScores\Pages\ViewGameScore;
use App\Filament\Resources\GameScores\Schemas\GameScoreForm;
use App\Filament\Resources\GameScores\Schemas\GameScoreInfolist;
use App\Filament\Resources\GameScores\Tables\GameScoresTable;
use App\Models\GameScore;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GameScoreResource extends Resource
{
    protected static ?string $model = GameScore::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return GameScoreForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return GameScoreInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GameScoresTable::configure($table);
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
            'index' => ListGameScores::route('/'),
            'create' => CreateGameScore::route('/create'),
            'view' => ViewGameScore::route('/{record}'),
            'edit' => EditGameScore::route('/{record}/edit'),
        ];
    }
}
