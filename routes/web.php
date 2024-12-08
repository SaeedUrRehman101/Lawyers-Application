<?php

use App\Http\Controllers\lawyersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get("/",function(){
    return view("Lawyer Website/index");
})->name("adolt");

Route::get('dashboard', function () {
    $userRole = Auth::user()->role;
    if ($userRole === 'admin') {
        // Admin view with all users
        $controller = app(UserController::class); // Create an instance of UserController
        return $controller->allUsers(); // Call the allUsers method
    } 
return view('Lawyer Dashboard.index');
})->name("Dashboard")->middleware(["auth:lawyers,web","dashmin:user,lawyer"]);

Route::view('login',"Lawyer Dashboard.login_one")->name("login");

Route::get("SignUp", function () {
    return view("Lawyer Dashboard.sign-up-one");
})->name("SignUp");

Route::get('User_Panel', function () {
    return view('Lawyer Dashboard.user-profile');
})->name("User_Panel")->middleware(["auth:web","dashmin:user"]);

Route::get("SignIn",function(){
    return view("Lawyer Dashboard.login_one");
})->name("SignIn");

Route::get('Lawyer_login',function(){
    return view('Lawyer Dashboard.logIn_Lawyer');
});

Route::controller(UserController::class)->group(function () {

    Route::post("SignUp","signUp")->name("SignUp");
    Route::post("SignIn", "signIn")->name("userSignIn");
    Route::get("SignOut","signOut")->name("SignOut");
    Route::post("update_profile", "profileUpdate")->name("update_profile");
    Route::post("Check_Password", "checkPassword")->name("checkPass");
    Route::get("Reset_Password", "resetPass")->name("reset_Pass");
    Route::get("Remove", "removeCookie");
    Route::post("Reset_Password", "resetPassword")->name("Reset_Password");

});

// ------------------------------------------------------------------------------------------------------

//LAWYERS CONTROLLER

Route::get("Lawyer",function(){
    return view("Lawyer Dashboard.registerLawyer");
})->name("Lawyer");

Route::controller(lawyersController::class)->group(function () {

    Route::post("Lawyer_login", "loginLawyer")->name("Lawyer_login");
    Route::post("Lawyer", "registerLawyer")->name("Lawyer");
    Route::get('Logout', "logOut")->name("Logout");
});

Route::get("Lawyer_Panel",function(){
    return view("Lawyer Dashboard.lawyer_Panel");
})->name("Lawyer_Panel")->middleware(["auth:lawyers","dashmin:lawyer"]);

Route::post("lawyer_Details",[lawyersController::class,"lawyerDetails"])->name("lawyer_Details");


// ------------------------------------------------------------------------------------------------------




// Route::get('dashboard', function () {
//     if (Auth::guard('lawyers')->check()) {
//         // Lawyer authenticated
//         return view("Lawyer Dashboard.index");
//     } elseif (Auth::guard('web')->check()) {
//         // Check if admin or user
//         $userRole = Auth::user()->role;
//         if ($userRole === 'admin') {
//             // Admin view with all users
//             $controller = app(UserController::class); // Create an instance of UserController
//             return $controller->allUsers(); // Call the allUsers method
//         } elseif ($userRole === 'user') {
//             // User view (you can return a separate view for users if needed)
//             return view("Lawyer Dashboard.index");
//         }
//     }
//     // Redirect if no one is authenticated
//     return redirect()->route('SignIn')->with("error", "Unauthorized access.");
// })->name('Dashboard');