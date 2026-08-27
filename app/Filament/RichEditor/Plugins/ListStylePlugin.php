<?php

namespace App\Filament\RichEditor\Plugins;

use Filament\Forms\Components\RichEditor\Plugins\Contracts\RichContentPlugin;
use Filament\Forms\Components\RichEditor\RichEditorTool;
use Filament\Support\Icons\Heroicon;

class ListStylePlugin implements RichContentPlugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getTipTapPhpExtensions(): array
    {
        return [];
    }

    public function getTipTapJsExtensions(): array
    {
        return [];
    }

    public function getEditorActions(): array
    {
        return [];
    }

    public function getEditorTools(): array
    {
        return [
            RichEditorTool::make('orderedListUpperAlpha')
                ->label('List A, B, C')
                ->jsHandler("
                    const editor = \$getEditor()

                    if (! editor) return

                    editor
                        .chain()
                        .focus()
                        .toggleOrderedList()
                        .updateAttributes('orderedList', {
                            type: 'A',
                        })
                        .run()
                ")
                ->icon(Heroicon::ListBullet),

            RichEditorTool::make('orderedListLowerAlpha')
                ->label('List a, b, c')
                ->jsHandler("
                    const editor = \$getEditor()

                    if (! editor) return

                    editor
                        .chain()
                        .focus()
                        .toggleOrderedList()
                        .updateAttributes('orderedList', {
                            type: 'a',
                        })
                        .run()
                ")
                ->icon(Heroicon::ListBullet),

            RichEditorTool::make('orderedListUpperRoman')
                ->label('List I, II, III')
                ->jsHandler("
                    const editor = \$getEditor()

                    if (! editor) return

                    editor
                        .chain()
                        .focus()
                        .toggleOrderedList()
                        .updateAttributes('orderedList', {
                            type: 'I',
                        })
                        .run()
                ")
                ->icon(Heroicon::ListBullet),

            RichEditorTool::make('orderedListLowerRoman')
                ->label('List i, ii, iii')
                ->jsHandler("
                    const editor = \$getEditor()

                    if (! editor) return

                    editor
                        .chain()
                        .focus()
                        .toggleOrderedList()
                        .updateAttributes('orderedList', {
                            type: 'i',
                        })
                        .run()
                ")
                ->icon(Heroicon::ListBullet),
        ];
    }

    public function getEnabledToolbarButtons(): array
    {
        return [];
    }

    public function getDisabledToolbarButtons(): array
    {
        return [];
    }
}