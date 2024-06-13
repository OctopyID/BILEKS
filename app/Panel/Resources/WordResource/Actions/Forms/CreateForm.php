<?php

namespace App\Panel\Resources\WordResource\Actions\Forms;

use App\Panel\Support\Field;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;

class CreateForm
{
    /**
     * @param  array $options
     * @return array
     */
    public static function make(array $options = []) : array
    {
        return [
            Step::make('word')
                ->label(__('Word'))
                ->schema([
                    Grid::make(2)->schema([
                        Field::make('word', function (TextInput $input) {
                            $input
                                ->label(__('Word'))
                                ->required();
                        }),

                        Field::make('syllable', function (TextInput $input) {
                            $input
                                ->label(__('Syllable'))
                                ->required();
                        }),
                    ]),

                    Field::make('meaning', function (Textarea $input) {
                        $input
                            ->label(__('Meaning'))
                            ->rows(3);
                    }),
                ]),

            Step::make('synonym')
                ->label(__('Synonym'))
                ->schema([
                    Repeater::make('synonyms')
                        ->schema([
                            Field::make('synonym_id', function (Select $select) {
                                $select
                                    ->label(__('Synonym'))
                                    ->searchable()
                                    ->options(function () {
                                        return \App\Models\Word::pluck('word', 'id')->toArray();
                                    });
                            }),
                        ]),

                ]),

            Step::make('antonym')
                ->label(__('Antonym'))
                ->schema([
                    Repeater::make('antonyms')
                        ->schema([
                            Field::make('antonym_id', function (Select $select) {
                                $select
                                    ->label(__('Synonym'))
                                    ->searchable()
                                    ->options(function () {
                                        return \App\Models\Word::pluck('word', 'id')->toArray();
                                    });
                            }),
                        ]),

                ]),
        ];
    }
}
