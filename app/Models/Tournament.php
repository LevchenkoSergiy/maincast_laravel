<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'game_type',
        'stage',
        'prize_pool',
        'is_live',
        'description',
        'start_date',
        'end_date',
        'url',
    ];
}
