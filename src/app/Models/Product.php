<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'img_path',
        'name',
        'price',
        'detail',
        'condition',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_product','category_id','product_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'product_user','product_id','user_id');
    }
}