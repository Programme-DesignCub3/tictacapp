<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Inerba\DbConfig\AbstractPageSettings;

class PopUpSettings extends AbstractPageSettings
{
    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    protected static ?string $title = 'Pop Up';

    // protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-wrench-screwdriver'; // Uncomment if you want to set a custom navigation icon

    // protected ?string $subheading = ''; // Uncomment if you want to set a custom subheading

    // protected static ?string $slug = 'pop-up-settings'; // Uncomment if you want to set a custom slug

    protected function settingName(): string
    {
        return 'pop-up';
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
                Toggle::make('enable')
                    ->live(),
                FileUpload::make('image')
                    ->required(fn (Get $get) => $get('enable'))
                    ->image()
                    ->directory('assets')
                    ->visibility('public')
                    ->moveFiles()
                    ->imageEditor()
                    ->getUploadedFileNameForStorageUsing(fn () => 'pop-up.png')
                    ->columnSpan(2),
                TextInput::make('url')
                    ->url(),

            ])
            ->statePath('data');
    }
}
