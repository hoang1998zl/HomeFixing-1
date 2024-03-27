<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'category',
        'price',
        'short_description',
        'description',
        'image',
        'product_status',
        'status',
        'created_at',
        'updated_at',
    ];
}
