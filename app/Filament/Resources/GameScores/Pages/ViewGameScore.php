<?php

namespace App\Filament\Resources\GameScores\Pages;

use App\Filament\Resources\GameScores\GameScoreResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewGameScore extends ViewRecord
{
    protected static string $resource = GameScoreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
