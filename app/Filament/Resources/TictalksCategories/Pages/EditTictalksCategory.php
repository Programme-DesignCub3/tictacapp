<?php

namespace App\Filament\Resources\TictalksCategories\Pages;

use App\Filament\Resources\TictalksCategories\TictalksCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTictalksCategory extends EditRecord
{
    protected static string $resource = TictalksCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
