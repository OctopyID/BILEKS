<?php

namespace App\Panel\Support;

use Laravel\SerializableClosure\Support\ReflectionClosure;

class Field
{
    /**
     * @param  string        $name
     * @param  callable|null $callback
     * @return \Filament\Forms\Components\Field
     */
    public static function make(string $name, callable $callback = null) : \Filament\Forms\Components\Field
    {
        /**
         * @var \Filament\Forms\Components\Field $class
         */
        $class = (new ReflectionClosure($callback))->getParameters()[0]->getType()->getName();

        return tap($class::make($name), function ($column) use ($callback) {
            $callback($column);
        });
    }
}
