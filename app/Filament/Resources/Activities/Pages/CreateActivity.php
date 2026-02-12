<?php

namespace App\Filament\Resources\Activities\Pages;

use App\Filament\Resources\Activities\ActivityResource;
use App\Trait\HasHandleEmptyRichEditor;
use Filament\Resources\Pages\CreateRecord;

class CreateActivity extends CreateRecord
{
    use HasHandleEmptyRichEditor;

    protected static string $resource = ActivityResource::class;

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     foreach ($data['content'] as $lang => $content) {
    //         $data['content'][$lang] = empty($content) ? null : $content;
    //     }

    //     return $data;
    // }
}
