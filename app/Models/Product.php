<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'price',
        'imageUrl',
        'size',
        'isPublished',
        'state',
        'reference',
        'category_id',
        'size-id',
        'state_id'
    ];
}
