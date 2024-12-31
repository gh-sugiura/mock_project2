<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;


class ProfileController extends Controller
{
    public function postCreateProfile(ProfileRequest $request)
    {
        $img_path = $request->file('img_path') 
            ->store('profile_image');
        $profile = [
            // "user_id" => Auth::id(),
            "user_id" => 1,
            "img_path" => $img_path,
            "name" => $request["name"],
            "postalcode" => $request["postalcode"],
            "address" => $request["address"],
            "building" => $request["building"],
        ];

        Profile::create($profile);
        return view("profile", compact("img_path"));
    }
}