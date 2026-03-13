<?php

namespace App\Filament\Resources\TictalksCategories\Pages;

use App\Filament\Resources\TictalksCategories\TictalksCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTictalksCategories extends ListRecords
{
    protected static string $resource = TictalksCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
