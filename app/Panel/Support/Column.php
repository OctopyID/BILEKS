<?php

namespace App\Panel\Support;

use Laravel\SerializableClosure\Support\ReflectionClosure;

class Column
{
    /**
     * @param  string        $name
     * @param  callable|null $callback
     * @return \Filament\Tables\Columns\Column
     */
    public static function make(string $name, callable $callback = null) : \Filament\Tables\Columns\Column
    {
        /**
         * @var \Filament\Tables\Columns\Column $class
         */
        $class = (new ReflectionClosure($callback))->getParameters()[0]->getType()->getName();

        return tap($class::make($name), function ($column) use ($callback) {
            $callback($column);
        });
    }
}
