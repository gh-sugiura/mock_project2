<?php
// edit from default

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;


// test
Route::get('/purchase/address', function () {
    return view('address');
});
Route::post('/purchase/address', [ProfileController::class, 'postEditAddress']);



// ProductController
// "auth" => \App\Http\Middleware\Authenticate::class,
Route::middleware("auth")->group(function () {
    Route::get("/index", [ProductController::class, "getIndex"]);
    Route::post("/index", [ProductController::class, "postIndex"]);
    Route::get("/mypage", [ProductController::class, "getMypage"]);
    Route::get("/item/{product_id}", [ProductController::class, "getItem"]);   //passparameter
    Route::get("/sell", [ProductController::class, "getSell"]);
});



// ProfileController
// "auth" => \App\Http\Middleware\Authenticate::class,
Route::middleware("auth")->group(function () {
    Route::get('/mypage/profile', [ProfileController::class, 'getProfile']);
    Route::post('/mypage', [ProfileController::class, 'postCreateEditProfile']);
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