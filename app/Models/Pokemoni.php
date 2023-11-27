<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemoni extends Model
{
    use HasFactory;

    protected $table = 'pokemoni';

    protected $fillable = [
        'jmeno', 'mazlivost', 'velikost', 'typ',
    ];

    protected $attributes = [
        'obrazek' => 'X.jpg'
    ];
}
