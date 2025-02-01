<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CategoryProducts extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'product_id',
    ];
}