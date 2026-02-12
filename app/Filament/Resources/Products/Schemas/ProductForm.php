<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(fn (Get $get) => (bool) ! filled($get('name')['id']))
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
                Textarea::make('specifications')
                    ->required(fn (Get $get) => (bool) ! filled($get('specifications')['id']))
                    ->validationMessages([
                        'required' => 'Required in Indonesia.',
                    ])
                    ->translatableTabs(),
                ColorPicker::make('color'),
                SpatieMediaLibraryFileUpload::make('packaging')
                    ->collection('packaging'),
                SpatieMediaLibraryFileUpload::make('mascot')
                    ->collection('mascot'),
            ]);
    }
}
