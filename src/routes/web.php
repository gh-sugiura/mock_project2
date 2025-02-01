<?php
// edit from default

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Profile;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

// test
// Route::get('/purchase/address', [ProfileController::class, 'getAddress']);



// ProductController
// "auth" => \App\Http\Middleware\Authenticate::class,
Route::middleware("auth")->group(function () {
    Route::get("/index", [ProductController::class, "getIndex"]);
    Route::get("/mypage", [ProductController::class, "getMypage"]);
    Route::post("/mypage", [ProductController::class, "postMypage"]);
    Route::get("/item/{product_id}", [ProductController::class, "getItem"]);    //use passparameter
    Route::get("/purchase/{product_id}", [ProductController::class, "getPurchase"]);    //use passparameter
    Route::get("/sell", [ProductController::class, "getSell"]);
});



// ProfileController
// "auth" => \App\Http\Middleware\Authenticate::class,
Route::middleware("auth")->group(function () {
    Route::get('/mypage/profile', [ProfileController::class, 'getProfile']);
    Route::post('/index', [ProfileController::class, 'postCreateEditProfile']);
    Route::get('/purchase/address/{product_id}', [ProfileController::class, 'getAddress']);    //use passparameter
    Route::post('/purchase/{product_id}', [ProfileController::class, 'postEditAddress']);
});



// email authentication (refrence : official document)
// display email authentication notification screen
Route::get("/email/verify", function () {
    return view("email_verify");
})->middleware("auth")->name("verification.notice");

// email authentication link processing
Route::get("/email/verify/{id}/{hash}", function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect("/index");
})->middleware(["auth", "signed"])->name("verification.verify");

// resend authentication link
Route::post("/email/verification-notification", function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with("message", "Verification link sent!");
})->middleware(["auth", "throttle:6,1"])->name("verification.send");



// use fortify default routing
// Route::get("/register", [Controller::class, ""]);
// Route::post("/register", [Controller::class, ""]);
// Route::get("/login", [Controller::class, ""]);
// Route::post("/login", [Controller::class, ""]);
// Route::get("/logout", [Controller::class, ""]);
// Route::post("/logout", [Controller::class, ""]);


// login/registerでリダイレクト先を分ける
// ミドルウェア？
// 