<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // agar bisa mass-assign
    protected $fillable = [
        'sku',
        'name',
        'stock',
        'description'
    ];
}
