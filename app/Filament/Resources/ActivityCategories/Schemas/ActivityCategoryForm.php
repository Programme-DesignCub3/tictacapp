<?php

namespace App\Filament\Resources\ActivityCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class ActivityCategoryForm
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
            ]);
    }
}
