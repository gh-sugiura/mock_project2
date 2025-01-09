<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Profile;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view("index",compact("products"));
    }


    public function getMypage()
    {
        $products = Product::all();
        $profile = Profile::find(Auth::id());
        return view("mypage", compact("products","profile"));
    }


    public function getItem($product_id)
    {
        $product = Product::find($product_id);
        return view("item",compact("product"));
    }  
}