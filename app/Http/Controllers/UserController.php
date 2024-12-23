<?php

namespace App\Http\Controllers;

use App\Models\bookAppointmentModel;
use App\Models\lawyersModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function signUp(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "login.password" => "required"
        ]);

        $user = new UserModel();
        $user->userName = $request->name;
        $user->email = $request->email;
        $user->password = $request->input('login.password');
        $user->save();
        if($user){
            Auth::login($user);
            return redirect()->route("User_Panel")->with("status","Your Account Registred Sucessfully.");
        }
        else{
            return redirect()->route("SignUp")->with("status","Account Doesn't Registred.");
        }
    }

    public function signIn(Request $request){
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $user = UserModel::where("email",$credentials['email'])->first();
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route("User_Panel")->with("status","LogedIn Successfully.");
        }
        if(!$user){
            return back()->withErrors(["email"=> "No account found with this email address.",])->onlyInput("email");
        }
        if(!Auth::attempt($credentials)){
            return back()->withErrors(["password" => "Password is Incorrect."])->onlyInput("email");
        }
    }

    public function signOut(){
        Auth::logout();
        return redirect()->route("SignIn")->with("status","LogOut Successfully.");
    }

    public function profileUpdate(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "dob" => "required",
            "contact" => "required|numeric",
            "states" => "required",
            "Address" => "required",
            "bio" => "required",
            "image" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048"  // image is optional
        ]);
    
        $user = UserModel::find($request->user_Id);
    
        if ($user) {
            // If image is present, handle the image upload
            if ($request->hasFile('image')) {
                $imageName = Str::random(10) . '.' . $request->file('image')->extension();
                $request->file('image')->move(public_path("assets/Dashboard/user_Images"), $imageName);
                $user->image = $imageName;
            }
    
            // Update other fields only if they have been changed
            if ($request->has('name')) {
                $user->userName = $request->name;
            }
            if ($request->has('email')) {
                $user->email = $request->email;
            }
            if ($request->has('dob')) {
                $user->dob = $request->dob;
            }
            if ($request->has('contact')) {
                $user->contact = $request->contact;
            }
            if ($request->has('states')) {
                $user->states = $request->states;
            }
            if ($request->has('Address')) {
                $user->Address = $request->Address;
            }
            if ($request->has('bio')) {
                $user->bio = $request->bio;
            }
    
            $user->save();
            return redirect()->route("User_Panel")->with("status", "Data Successfully Updated");
        }
        else {
            return redirect()->back()->withErrors(['user_id' => 'User not found']);
        }
    }

    public function checkPassword(Request $request){
        // $user = signUpModel::find($request->email);
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);
        if (!Auth::attempt($credentials)) {
            return back()->withErrors(["password" => "Password is incorrect."])->onlyInput("email");
        }
        Cookie::queue('password_confirmed', true, 1);
        
        return redirect()->route("reset_Pass");
    
    }

    public function resetPass(){
        if(!Cookie::get("password_confirmed")){
            return redirect()->route("User_Panel");
        }
        return view("Lawyer Dashboard.reset_password");
    }

    public function resetPassword(Request $request){
        $data = $request->validate([
            'login.password' => "required"
        ]);
    
        $user = UserModel::where('email', $request->email)->first();
        if(!$user){
            return back()->withErrors(["password","Password Does not Match"]);
        }
        $user->password = $data['login']["password"];
        $user->save();
        return redirect()->route("User_Panel")->with("status","Password Reset Sucessfully.");
    
    }

    public function allUsers(){
        $users = UserModel::all();
        // $lawyers = lawyersModel::all();
        return view("Lawyer Dashboard.index",compact("users"));
    }

    public function lawyers()
{
    $lawyerId = Auth::guard('lawyers')->user()->id;
    // dd($lawyerId); // Confirm the logged-in lawyer ID
    
    // Check if data exists for this lawyerId in bookAppointmentModel
    $lawyerAppointments = bookAppointmentModel::where('lawyerId', $lawyerId)->get();
    
    // Debug appointments data
    // if ($lawyerAppointments->isEmpty()) {
    //     dd("No appointments found for lawyerId: " . $lawyerId);
    // }

    // Return view with data
    return view("Lawyer Dashboard.index", compact("lawyerAppointments"));
}


}


//COOKIE REMOVING

// public function removeCookie()
//     {
//         // Remove the 'password_confirmed' cookie
//         Cookie::queue(Cookie::forget('password_confirmed'));
    
//         return redirect()->route('User_Panel')->with('message', 'Cookie removed successfully!');
//     }


// $request->session()->invalidate(): Ye method puri session data ko destroy kar deta hai aur session ID invalidate karta hai.
// $request->session()->regenerateToken(): Ye method nayi CSRF token generate karta hai. Ye bhi security ke liye zaruri hai.