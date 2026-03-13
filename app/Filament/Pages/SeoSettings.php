<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Inerba\DbConfig\AbstractPageSettings;

class SeoSettings extends AbstractPageSettings
{
    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    protected static ?string $title = 'Seo';

    // protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-wrench-screwdriver'; // Uncomment if you want to set a custom navigation icon

    // protected ?string $subheading = ''; // Uncomment if you want to set a custom subheading

    // protected static ?string $slug = 'seo-settings'; // Uncomment if you want to set a custom slug

    protected function settingName(): string
    {
        return 'seo';
    }

    /**
     * Provide default values.
     *
     * @return array<string, mixed>
     */
    public function getDefaultData(): array
    {
        return [];
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                ViewField::make('seo_description')
                    ->hiddenLabel()
                    ->view('filament.schemas.components.seo-description'),
                Flex::make([
                    Section::make([
                        TextInput::make('seo_title')
                            ->label('SEO Title'),
                        TextInput::make('seo_keywords')
                            ->label('SEO Keywords')
                            ->helperText('Separate keywords with commas.'),
                        KeyValue::make('seo_metadata')
                            ->label('SEO Metadata'),
                    ]),
                    Section::make([
                        ViewField::make('seo_preview')
                            ->hiddenLabel()
                            ->view('filament.schemas.components.seo-preview'),
                    ]),
                ]),
            ])
            ->statePath('data');
    }
}
