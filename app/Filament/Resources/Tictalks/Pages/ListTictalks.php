<?php

namespace App\Filament\Resources\Tictalks\Pages;

use App\Filament\Resources\Tictalks\TictalkResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTictalks extends ListRecords
{
    protected static string $resource = TictalkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
