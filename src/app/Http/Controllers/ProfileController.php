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
        $profile = [
            // "user_id" => Auth::id(),
            "user_id" => 1,
            "name" => $request["name"],
            "postalcode" => $request["postalcode"],
            "address" => $request["address"],
            "building" => $request["building"],
        ];

        Profile::create($profile);
        return view("/");
    }
}