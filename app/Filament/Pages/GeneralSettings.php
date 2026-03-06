<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Inerba\DbConfig\AbstractPageSettings;

class GeneralSettings extends AbstractPageSettings
{
    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    protected static ?string $title = 'General';

    // protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-wrench-screwdriver'; // Uncomment if you want to set a custom navigation icon

    // protected ?string $subheading = ''; // Uncomment if you want to set a custom subheading

    // protected static ?string $slug = 'general-settings'; // Uncomment if you want to set a custom slug

    protected function settingName(): string
    {
        return 'general';
    }

    /**
     * Provide default values.
     *
     * @return array<string, mixed>
     */
    public function getDefaultData(): array
    {
        return [
            'site_name' => 'TicTacLand',
        ];
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('site_description')
                    ->columnSpanFull(),
                TextInput::make('support_email')
                    ->prefixIcon('heroicon-o-envelope'),
                TextInput::make('support_phone')
                    ->prefixIcon('heroicon-o-phone'),

            ])
            ->statePath('data');
    }
}
