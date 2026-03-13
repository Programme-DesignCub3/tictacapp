<?php

namespace App\Filament\Resources\Tictalks;

use App\Filament\Resources\Tictalks\Pages\CreateTictalk;
use App\Filament\Resources\Tictalks\Pages\EditTictalk;
use App\Filament\Resources\Tictalks\Pages\ListTictalks;
use App\Filament\Resources\Tictalks\Schemas\TictalkForm;
use App\Filament\Resources\Tictalks\Tables\TictalksTable;
use App\Models\Tictalk;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TictalkResource extends Resource
{
    protected static ?string $model = Tictalk::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'tittle';

    public static function form(Schema $schema): Schema
    {
        return TictalkForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TictalksTable::configure($table);
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
            'index' => ListTictalks::route('/'),
            'create' => CreateTictalk::route('/create'),
            'edit' => EditTictalk::route('/{record}/edit'),
        ];
    }
}
