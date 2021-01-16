<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeModel extends Model
{
    use HasFactory;
    protected $table = 'cafe_models';
    protected $fillable = [
        'name',
        'price',
        'photo'
    ];
}
