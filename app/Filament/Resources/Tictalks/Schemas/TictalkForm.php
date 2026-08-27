<?php

namespace App\Filament\Resources\Tictalks\Schemas;

use Awcodes\RicherEditor\Plugins\EmbedPlugin;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class TictalkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                SpatieMediaLibraryFileUpload::make('thumbnail')
                    ->collection('thumbnail')
                    ->required(),
                TextInput::make('title')
                    ->required(fn (Get $get) => (bool) ! filled($get('title')['id']))
                    ->validationMessages([
                        'required' => 'Required in Indonesia.',
                    ])
                    ->translatableTabs(),

                Textarea::make('description')
                    ->required(fn (Get $get) => (bool) ! filled($get('description')['id']))
                    ->validationMessages([
                        'required' => 'Required in Indonesia.',
                    ])
                    ->translatableTabs(),
                RichEditor::make('content')
                    ->validationMessages([
                        'required' => 'Required in Indonesia.',
                    ])
                    ->plugins([
                        EmbedPlugin::make(),
                    ])
                    ->toolbarButtons([
                        ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                        ['h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd'],
                        ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                        ['table', 'attachFiles'], // The `customBlocks` and `mergeTags` tools are also added here if those features are used.
                        ['embed'],
                        ['undo', 'redo'],
                    ])
                    ->translatableTabs(),
                Select::make('tictalks_category_id')
                    ->relationship(
                        name: 'category',
                        titleAttribute: 'name',
                    )
                    ->createOptionForm([
                        TextInput::make('name')
                            ->translatableTabs()
                            ->label(__('name')),
                    ])
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->name)
                    ->label(__('category'))
                    ->searchable(['name'])
                    ->preload()
                    ->required(),
                SpatieTagsInput::make('tags'),
                DateTimePicker::make('published_at')
                    ->default(now())
                    ->required(),
            ])
            ->columns(1);
    }
}
