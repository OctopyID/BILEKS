<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * @return void
     */
    public function up() : void
    {
        Schema::create('words', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('word')->unique();
            $table->string('syllables');
            $table->text('meaning')->nullable();
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down() : void
    {
        Schema::dropIfExists('words');
    }
};
