<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\AddressRequest;


class ProfileController extends Controller
{
    public function getProfile()
    {
        $profile = Profile::find(Auth::id());
        // $profile = Profile::find(20);
        return view('profile',compact("profile"));
    }


    public function postCreateProfile(ProfileRequest $request)
    {
        $img_path = $request->file('img_path') 
            ->store('public/profile_image');
        
        $profile_input = [
            "user_id" => Auth::id(),
            "img_path" => $img_path,
            "name" => $request["name"],
            "postalcode" => $request["postalcode"],
            "address" => $request["address"],
            "building" => $request["building"],
        ];

        $profile_old = Profile::find(Auth::id());
        if(is_null($profile_old)) {
            Profile::create($profile_input);
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


    public function postEditAddress(AddressRequest $request)
    {
        $address = Profile::find(Auth::id());
        // $address = Profile::find(1)
        //     -> update([
        //         "postalcode" => $request["postalcode"],
        //         "address" => $request["address"],
        //         "building" => $request["building"],
        //     ]);

        if ($request["postalcode"] != null) {
            $address -> update(["postalcode" => $request["postalcode"]]);
        }
        if ($request["address"] != null) {
            $address -> update(["address" => $request["address"]]);
        }
        if ($request["building"] != null) {
            $address -> update(["building" => $request["building"]]);
        }

        return view("item");
    }
}