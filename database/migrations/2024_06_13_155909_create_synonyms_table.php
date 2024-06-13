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
        Schema::create('synonyms', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('word_id')->constrained()->cascadeOnDelete();
            $table->foreignUlid('synonym_id')->constrained('words')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down() : void
    {
        Schema::dropIfExists('synonyms');
    }
};
