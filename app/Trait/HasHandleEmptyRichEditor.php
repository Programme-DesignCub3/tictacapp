<?php

namespace App\Trait;

use App\Filament\Helper\RichEditorExtra;

trait HasHandleEmptyRichEditor
{
    protected function beforeValidate(): void
    {
        $this->data['content'] = RichEditorExtra::handleEmptyRichEditor($this->data['content']);

    }
}
