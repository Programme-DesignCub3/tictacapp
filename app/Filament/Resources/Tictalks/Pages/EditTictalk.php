<?php

namespace App\Filament\Resources\Tictalks\Pages;

use App\Filament\Resources\Tictalks\TictalkResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTictalk extends EditRecord
{
    protected static string $resource = TictalkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
