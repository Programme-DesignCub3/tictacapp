<?php

namespace App\Filament\Helper;

use Filament\Forms\Components\RichEditor\RichContentRenderer;

class RichEditorExtra
{
    public static function isEmpty($value): bool
    {
        return is_null($value) || $value === '' || $value === '<p></p>';
    }

    public static function handleEmptyRichEditor(array|string $data)
    {
        if (is_array($data)) {
            if (array_key_exists('type', $data)) {
                if (RichContentRenderer::make($data)->toHtml() == '<p></p>') {
                    $data = null;
                }
            } else {
                foreach ($data as &$value) {
                    if (array_key_exists('type', $value)) {
                        if (RichContentRenderer::make($value)->toHtml() == '<p></p>') {
                            $value = null;
                        }
                    } elseif (empty($value)) {
                        $value = null;
                    }
                }
            }

        } elseif ($data == '<p></p>') {
            $data = null;
        }

        return $data;
    }
}
