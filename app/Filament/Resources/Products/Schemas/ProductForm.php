<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('order_column')
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('specifications')
                    ->required(),
                SpatieMediaLibraryFileUpload::make('packaging')
                    ->collection('packaging'),
                SpatieMediaLibraryFileUpload::make('mascot')
                    ->collection('mascot'),

            ]);
    }
}
