<?php

namespace App\Filament\Resources\TictalksCategories;

use App\Filament\Resources\TictalksCategories\Pages\CreateTictalksCategory;
use App\Filament\Resources\TictalksCategories\Pages\EditTictalksCategory;
use App\Filament\Resources\TictalksCategories\Pages\ListTictalksCategories;
use App\Filament\Resources\TictalksCategories\Schemas\TictalksCategoryForm;
use App\Filament\Resources\TictalksCategories\Tables\TictalksCategoriesTable;
use App\Models\TictalksCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TictalksCategoryResource extends Resource
{
    protected static ?string $model = TictalksCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return TictalksCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TictalksCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTictalksCategories::route('/'),
            'create' => CreateTictalksCategory::route('/create'),
            'edit' => EditTictalksCategory::route('/{record}/edit'),
        ];
    }
}
