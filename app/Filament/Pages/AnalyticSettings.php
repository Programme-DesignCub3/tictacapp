<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Inerba\DbConfig\AbstractPageSettings;

class AnalyticSettings extends AbstractPageSettings
{
    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    protected static ?string $title = 'Analytic';

    // protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-wrench-screwdriver'; // Uncomment if you want to set a custom navigation icon

    // protected ?string $subheading = ''; // Uncomment if you want to set a custom subheading

    // protected static ?string $slug = 'analytics-settings'; // Uncomment if you want to set a custom slug

    protected function settingName(): string
    {
        return 'analytics';
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
                TextInput::make('google_analytics_id')
                    ->label('Google Analytics ID')
                    ->placeholder('UA-123456789-1'),
            ])
            ->statePath('data');
    }
}
