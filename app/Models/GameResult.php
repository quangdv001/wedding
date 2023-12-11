<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameResult extends Model
{
    use HasFactory;

    protected $table = 'game_result';

    protected $fillable = [
        'user_id',
        'gift_id'
    ];
}
