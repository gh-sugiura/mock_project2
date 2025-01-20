<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\SellRequest;
use App\Http\Requests\PurchaseRequest;
use App\Models\Category;
use App\Models\CategoryProducts;
use App\Models\User;
use App\Models\Product;
use App\Models\Profile;


class ProductController extends Controller
{
    // page transition : index display
    public function getIndex()
    {
        $products = Product::all();
        return view("index",compact("products"));
    }



    // page transition : sell -> index
    public function postIndex(SellRequest $request)
    {
        // create Products table column
        $img_path = $request['img_path']->store('public/product_image');
        $product_create = [
            "img_path" => $img_path,
            "name" => $request["sell_name"],
            "price" => $request["sell_price"],
            "content" => $request["sell_content"],
            "condition" => $request["sell_condition"],
        ];
        Product::create($product_create);

        // create CategoryProducts table column
        $product_id = Product::where("name",$request["sell_name"]) -> get(["id"]);
        $category = $request["sell_category"];

        foreach($category as $i) {
            $category_products_create = [
                "category_id" => $i,
                "product_id" => $product_id[0]["id"],
            ];
            CategoryProducts::create($category_products_create);
        }

        $products = Product::all();
        return view("index",compact("products"));
    }



    // page transition : mypage display
    public function getMypage()
    {
        $products = Product::all();
        $profile = Profile::find(Auth::id());
        return view("mypage", compact("products","profile"));
    }



    // page transition : item display
    public function getItem($product_id)
    {
        $product = Product::find($product_id);
        return view("item",compact("product"));
    }



    // page transition : item -> purchase
    public function getPurchase($product_id)
    {
        $product = Product::find($product_id);
        $profile = Profile::find(Auth::id());
        return view('purchase', compact("product", "profile"));
    }
    
    

    // page transition : sell display
    public function getSell()
    {
        $categories = Category::all();
        return view("sell",compact("categories"));
    }  
}