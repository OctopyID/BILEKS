<?php

namespace App\Panel\Resources;

use App\Models\Word;
use App\Panel\Resources\WordResource\Pages;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\Resource;

class WordResource extends Resource
{
    protected static ?string $model = Word::class;

    /**
     * @var string|null
     */
    protected static ?string $navigationIcon = 'lucide-whole-word';

    /**
     * @return string
     */
    public static function getModelLabel() : string
    {
        return 'Kosa Kata';
    }

    /**
     * @return array|PageRegistration[]
     */
    public static function getPages() : array
    {
        return [
            'index' => Pages\ListWords::route('/'),
            'edit'  => Pages\EditWord::route('/{record}/edit'),
        ];
    }
}
