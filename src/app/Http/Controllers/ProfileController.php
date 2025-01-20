<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\AddressRequest;
use App\Models\User;
use App\Models\Profile;
use App\Models\Product;


class ProfileController extends Controller
{
    // page transition : profile display
    public function getProfile()
    {
        $profile = Profile::find(Auth::id());
        return view('profile',compact("profile"));
    }



    // page transition : profile -> mypage
    public function postCreateEditProfile(ProfileRequest $request)
    {
        //get & save image path
        if(isset($request['img_path'])) {
            $img_path = $request['img_path']->store('public/profile_image');
        } else {
            $img_path = null;
        }

        // create column array for Profiles table
        $profile_create = [
            "user_id" => Auth::id(),
            "img_path" => $img_path,
            "name" => $request["name"],
            "postalcode" => $request["postalcode"],
            "address" => $request["address"],
            "building" => $request["building"],
        ];

        // create or update Profiles table column
        $profile_old = Profile::find(Auth::id());
        if(is_null($profile_old)) {
            Profile::create($profile_create);
        } else {
            $profile_old -> update([
                "img_path" => $img_path,
                "postalcode" => $request["postalcode"],
                "address" => $request["address"],
                "building" => $request["building"],
            ]);
        }

        $products = Product::all();
        $profile = Profile::find(Auth::id());
        return view("mypage", compact("products", "profile"));
    }



    // page transition : address display
    public function getAddress($product_id)
    {
        $product = Product::find($product_id);
        $profile = Profile::find(Auth::id());
        return view('address', compact("product", "profile"));
    }



    // page transition : address -> purchase
    public function postEditAddress(AddressRequest $request, $product_id)
    {
        Profile::find(Auth::id())
            -> update([
                "postalcode" => $request["postalcode"],
                "address" => $request["address"],
                "building" => $request["building"],
            ]);

        $product = Product::find($product_id);
        $profile = Profile::find(Auth::id());
        return view('purchase',compact("product", "profile"));
    }
}