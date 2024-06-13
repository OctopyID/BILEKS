<?php

namespace App\Panel\Resources\WordResource\Pages;

use App\Panel\Resources\WordResource;
use App\Panel\Support\Column;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ListWords extends ListRecords
{
    protected static string $resource = WordResource::class;

    /**
     * @return array
     */
    protected function getHeaderActions() : array
    {
        return [
            WordResource\Actions\CreateAction::make('create'),
        ];
    }

    /**
     * @param  Table $table
     * @return Table
     */
    public function table(Table $table) : Table
    {
        return
            parent::table($table)
                ->columns([
                    Column::make('word', function (TextColumn $column) {
                        $column->label(__('Word'));
                    }),

                    Column::make('syllable', function (TextColumn $column) {
                        $column->label(__('Syllable'));
                    }),

                    Column::make('meaning', function (TextColumn $column) {
                        $column->label(__('Meaning'));
                    }),
                ]);
    }
}
