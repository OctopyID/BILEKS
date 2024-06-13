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
        Schema::create('examples', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('word_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('example');
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down() : void
    {
        Schema::dropIfExists('examples');
    }
};
