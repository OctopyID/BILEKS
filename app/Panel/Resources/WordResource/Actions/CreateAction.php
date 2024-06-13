<?php

namespace App\Panel\Resources\WordResource\Actions;

use App\Panel\Resources\WordResource\Actions\Forms\CreateForm;

class CreateAction extends \Filament\Actions\CreateAction
{
    /**
     * @return void
     */
    protected function setUp() : void
    {
        parent::setUp();

        $this
            ->label(__('Create Word'))
            ->icon('lucide-plus');

        $this
            ->steps(CreateForm::make([

            ]));
    }
}
