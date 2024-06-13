<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasUlids, HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'word', 'syllable', 'meaning',
    ];
}
