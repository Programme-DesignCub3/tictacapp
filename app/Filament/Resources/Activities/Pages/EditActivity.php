<?php

namespace App\Filament\Resources\Activities\Pages;

use App\Filament\Resources\Activities\ActivityResource;
use App\Trait\HasHandleEmptyRichEditor;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditActivity extends EditRecord
{
    use HasHandleEmptyRichEditor;

    protected static string $resource = ActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    // protected function mutateFormDataBeforeSave(array $data): array
    // {
    //     foreach ($data['content'] as $lang => $content) {
    //         $data['content'][$lang] = empty($content) ? null : $content;
    //     }
    //     dd($data);

    //     return $data;
    // }
}
