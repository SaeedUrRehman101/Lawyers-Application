<?php

namespace App\Http\Controllers;

use App\Models\lawyersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class lawyersController extends Controller
{
    public function registerLawyer(Request $request){
        $request->validate([
            "name"=> "required",
            "contact"=> "required|numeric",
            "email"=> "required|email",
            "password"=> "required",
            "lawyerImage"=> "required",
            "designation"=> "required",
            "qualification"=> "required",
            "province"=> "required",
            "lawyer_Address"=> "required",
            "Bar_License"=> "required|numeric",
            "Court_Enrollment"=> "required|numeric",
        ]);

        $imageName = Str::random(10).'.'.$request->file('lawyerImage')->extension();
        $request->file("lawyerImage")->move(public_path("assets/Dashboard/Lawyer_Image"), $imageName);

        $lawyer = new lawyersModel();
        $lawyer->lawyerName = $request->name;
        $lawyer->contact = $request->contact;
        $lawyer->email = $request->email;
        $lawyer->password = $request->password;
        $lawyer->image = $imageName;
        $lawyer->designation = $request->designation;
        $lawyer->qualification = $request->qualification;
        $lawyer->province = $request->province;
        $lawyer->address = $request->lawyer_Address;
        $lawyer->barLicense = $request->Bar_License;
        $lawyer->Court_Enrollment_No = $request->Court_Enrollment;
        $lawyer->save();

        if($lawyer){
            // dd($lawyer);
            Auth::guard('lawyers')->login($lawyer);
            // dd(Auth::guard('lawyers')->user());
            // Auth::login($lawyer);
            return redirect()->route("Dashboard")->with("status","Lawyer Registered Sucessfully.");
        }
        else{
            return redirect()->route("Lawyer");
        }

    }

    public function loginLawyer(Request $request){
    // Validate the input data
    $credentials = $request->validate([
        "email" => "required|email",
        'designation' => "required",
        "password" => "required"
    ]);

    $lawyer = lawyersModel::where('email', $request->email)->first();

    if (!$lawyer) {
        return back()->withErrors(["email" => "No account found with this email address."])->onlyInput("email");
    }
    if ($lawyer->designation != $request->designation) {
        return back()->withErrors([
            "designation" => "Designation is incorrect."
        ])->onlyInput("email");
    }
    if (!Auth::guard('lawyers')->attempt($credentials)) {
        return back()->withErrors(["password" => "Password is Incorrect."])->onlyInput("email");
    }
    $request->session()->regenerate();
    Auth::guard('lawyers')->login($lawyer);
    return redirect()->route("Dashboard")->with("status", "Lawyer LoggedIn Successfully.");
    }

    public function lawyerDetails(Request $request){
        $request->validate([
            "name" => "required",
            "dob" => "required",
            "email" => "required|email",
            "contact" => "required|numeric",
            "province" => "required",
            "address" => "required",
            // "areas" => "required|array",
            // "areas.*" => "string",
            "working_Place" => "required",
            "designation" => "required",
            "education" => "required",
            "experience" => "required",
            "about" => "required",
            "image" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
            "lawyer_Slots" => "required",
            "end_time" => "required",
            "areasId" => "required",
        ]);

        $lawyer = lawyersModel::find($request->lawyer_Id);
        // $areas = implode(',', $request->input('areas'));
        // $lawyer_Slots = implode(',', $request->input('lawyer_Slots'));
        // $SlotsEndTime = implode(',', $request->input('end_time'));

        // ---------------------------------------------------------------

        // Combine lawyer_Slots with end_time
        $slotsWithEndTime = [];
        foreach ($request->lawyer_Slots as $index => $slot) {
            $endTime = $request->end_time[$index] ?? '';
            $slotsWithEndTime[] = $slot . ' to ' . $endTime;
        }
        $lawyerSlotsString = implode(',', $slotsWithEndTime);

        if ($lawyer) {
            // If image is present, handle the image upload
            if ($request->hasFile('image')) {
                $imageName = Str::random(10) . '.' . $request->file('image')->extension();
                $request->file('image')->move(public_path("assets/Dashboard/lawyer_Image"), $imageName);
                $lawyer->image = $imageName;
            }
            // Update other fields only if they have been changed
            if ($request->has('name')) {
                $lawyer->lawyerName = $request->name;
            }
            if ($request->has('dob')) {
                $lawyer->Lawyer_dob = $request->dob;
            }
            if ($request->has('email')) {
                $lawyer->email = $request->email;
            }
            if ($request->has('contact')) {
                $lawyer->contact = $request->contact;
            }
            if ($request->has('province')) {
                $lawyer->province = $request->province;
            }
            if ($request->has('address')) {
                $lawyer->address = $request->address;
            }
            if ($request->has('areasId')) {
                $lawyer->areasId = $request->areasId;
            }
            // if ($request->has('areas')) {
            //     $lawyer->areas = $areas;
            // }
            if ($request->has('working_Place')) {
                $lawyer->working_Place = $request->working_Place;
            }
            if ($request->has('designation')) {
                $lawyer->designation = $request->designation;
            }
            if ($request->has('education')) {
                $lawyer->education = $request->education;
            }
            if ($request->has('experience')) {
                $lawyer->experience = $request->experience;
            }
            if ($request->has('about')) {
                $lawyer->about = $request->about;
            }
            if ($request->has('lawyer_Slots')) {
                $lawyer->Lawyer_Slots = $lawyerSlotsString;
            }
            // if ($request->has('end_time')) {
            //     $lawyer->slots_EndTime = $SlotsEndTime;
            // }

            $lawyer->save();
            return redirect()->route("Lawyer_Panel")->with("status", "Data Successfully Updated");
        }
        else {
            return back()->withErrors(['lawyer_id' => 'User not found']);
        }

    }


    public function logOut(){
        Auth::guard('lawyers')->logout();
        return redirect()->route('Lawyer_Web');
    }
}
