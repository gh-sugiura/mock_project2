<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
    ];

    public function products()
    {
        // return $this->belongsToMany(Product::class,'category_products','product_id','category_id');
        return $this->belongsToMany(Product::class,'category_products');
    }
}