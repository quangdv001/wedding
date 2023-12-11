<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    protected $table = 'gift';

    protected $fillable = [
        'order',
        'name',
        'image',
        'qty'
    ];
}
