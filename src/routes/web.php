<?php
// edit from default

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileImageController;


// test
Route::get('/mypage/profile', function () {
    return view('profile');
});

Route::middleware(["auth", "verified"])->group(function () {
    Route::get('/index', function () {
        return view('index');
    });
});


// ProfileController
// Route::get('/mypage/profile', [ProfileController::class, 'postCreateProfile']);
Route::post('/mypage/profile', [ProfileController::class, 'postCreateProfile']);


// email authentication (refrence:official document)
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
// Route::get("/register", [ContactController::class, "register"]);
// Route::post("/register", [ContactController::class, "register"]);
// Route::get("/login", [ContactController::class, "login"]);
// Route::post("/login", [ContactController::class, "login"]);
// Route::get("/logout", [ContactController::class, "logout"]);
// Route::post("/logout", [ContactController::class, "logout"]);