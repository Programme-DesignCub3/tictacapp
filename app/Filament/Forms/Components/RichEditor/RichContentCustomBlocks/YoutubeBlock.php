<?php

namespace App\Filament\Forms\Components\RichEditor\RichContentCustomBlocks;

use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor\RichContentCustomBlock;
use Filament\Forms\Components\TextInput;

class YoutubeBlock extends RichContentCustomBlock
{
    public static function getId(): string
    {
        return 'youtube';
    }

    public static function getLabel(): string
    {
        return 'Youtube';
    }

    public static function configureEditorAction(Action $action): Action
    {
        return $action
            ->modalDescription('Insert YouTube Video URL')
            ->schema([
                TextInput::make('url')
                    ->label('YouTube URL')
                    ->required()
                    ->url()
                    ->placeholder('https://www.youtube.com/watch?v=...'),
            ]);
    }

    // Pass the $data array so the preview can see the URL
    public static function toPreviewHtml(array $config, array $data = []): string
    {

        return view('filament.forms.components.rich-editor.rich-content-custom-blocks.youtube.preview', [
            'url' => $config['url'] ?? null,
        ])->render();
    }

    // Pass the $data array so the frontend index view can see the URL
    public static function toHtml(array $config, array $data): string
    {
        return view('filament.forms.components.rich-editor.rich-content-custom-blocks.youtube.index', [
            'url' => $config['url'] ?? null,
        ])->render();
    }
}
