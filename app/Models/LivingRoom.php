<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivingRoom extends Model
{
    use HasFactory;

    protected $table = 'living_room'; // Tablo adı

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'stock',
    ];
}
