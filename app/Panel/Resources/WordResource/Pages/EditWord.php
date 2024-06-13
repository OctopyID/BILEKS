<?php

namespace App\Panel\Resources\WordResource\Pages;

use App\Panel\Resources\WordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWord extends EditRecord
{
    protected static string $resource = WordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
