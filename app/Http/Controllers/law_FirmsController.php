<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\bookAppointmentModel;
use App\Models\contactModel;
use App\Models\law_FirmsModel;
use App\Models\lawyersModel;
use App\Models\services_detailModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class law_FirmsController extends Controller
{
    public function lawServices(Request $request){

        $request->validate([
            "firmHeading"=> "required",
            "firmPara" => "required|regex:/^[A-Z ,][a-zA-Z ',.]{20,100}$/",
            // "firmPara" => "required|min:20|max:100|regex:/^[A-Z][a-zA-Z ',.]+$/",
            "lawFirms"=> "required",
            "firmImg"=> "required",
        ],[
            "firmPara.regex" => "The Paragraph must be in between 40 to 100 characters."
        ]
    );

        $services = new law_FirmsModel();
        $services->law_firm = $request->lawFirms;
        $services->firmHeading = $request->firmHeading;
        $services->firmPara = $request->firmPara;
        $FirmImgName = Str::random(10).'.'.$request->file("firmImg")->extension();
        $request->file("firmImg")->move(public_path("assets/Dashboard/firm_Services"), $FirmImgName);
        $services->firmImage = $FirmImgName;
        $services->save();

        return back()->with("status","Law Firm Service Added Sucessfully.");


    }

    public function ViewServices(){
        $allServices = law_FirmsModel::all();
        return view("Lawyer Website.index",compact("allServices"));
    }

    public function allFirms(){
        $firms = law_FirmsModel::all();
        return view("Lawyer Dashboard.lawyer_Panel",compact("firms"));
    }

    public function lawyerServices(law_FirmsModel $law_Firms = null) {
        $Lawyers = [];
        $serviceLawyers = [];
        $allLawyers = [];
    
        if ($law_Firms) {
            $Lawyers = $law_Firms->load("lawyers");
            $serviceLawyers = lawyersModel::where('areasId', $law_Firms->id)->get();
        } else {
            $allLawyers = lawyersModel::all();
        }
    
        return view("Lawyer Website.servicesList", compact("serviceLawyers", "Lawyers", "allLawyers"));
    }
    

    public function LawyerProfiles(law_FirmsModel $law_firm,$lawyerId) {
        $lawServices = $law_firm->load("lawyers");
        $lawyer = lawyersModel::where('id',$lawyerId)->first();
        return view("Lawyer Website.services", compact("lawServices","lawyer"));
    }


    public function contactLawyer(Request $request){

        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "contact" => "required|numeric",
            "slots" => "required",
            "service" => "required",
            "message" => "required"

        ]);

        // Check if slot is already booked for the same user
        $isSlotBooked = bookAppointmentModel::where('userId', $request->uId)
        ->where('slots', $request->slots)
        ->exists();

        $isSlotBookedAnyone = bookAppointmentModel::where('slots',$request->slots)->exists();

        if ($isSlotBooked) {
            return back()->withErrors(['slots' => 'You Already Booked this Slot.']);
        }
        if ($isSlotBookedAnyone) {
            return back()->withErrors(['slots' => 'Slot is Already Booked.']);
        }

        $userInfo = new bookAppointmentModel();
        $userInfo->userId = $request->uId;
        $userInfo->lawyerId = $request->lawId;
        $userInfo->userName = $request->name;
        $userInfo->email = $request->email;
        $userInfo->contact = $request->contact;
        $userInfo->slots = $request->slots;
        $userInfo->service = $request->service;
        $userInfo->message = $request->message;
        $userInfo->save();
        // -----------------------------------------
                // MAIL WORK
        $toEmail = $request->lawMail;
        $mailName = $request->name;
        $mailSlots = $request->slots;
        $mailMessage = $request->message;
        $mailService = $request->service;
        $maillawName = $request->lawName;
        // dd($toEmail);
        $subject = "Client Booked an Appointment";
        // Mail::to($toEmail)->send(new SendEmail($message,$subject));
        try {
            Mail::to($toEmail)->send(new SendEmail( $subject,$mailName,$mailSlots,$mailMessage,$mailService,$maillawName));
            return back()->with('status', "Your Appointment is Booked and Email Sent.");
        } catch (\Exception $e) {
            return back()->with('error', "Appointment booked but email failed to send. Error: " . $e->getMessage());
        }
        
        // dd($mailRequest);
        if($userInfo){
            return back()->with('status',"Your Appointment is Booked.");
        }
    } 

    public function showAppointment() {
        $userId = Auth::user()->id;
    
        // User ki sari appointments fetch karen
        $appointment = bookAppointmentModel::where('userId', $userId)->get();
    
        // Appointments me se sari lawyerId fetch karen
        $lawyerIds = $appointment->pluck('lawyerId');
    
        // Related lawyers ka data fetch karen
        $getLawyer = lawyersModel::whereIn('id', $lawyerIds)->get();
    
        // Data view me bhejna
        return view('Lawyer Dashboard.index', compact('appointment', 'getLawyer'));
    }

    public function showLawfirms(){
        $lawFirms = law_FirmsModel::all();
        return view("Lawyer Dashboard.lawFirms",compact("lawFirms"));
    }


    public function servicesDetail(Request $request){

        $request->validate([
            "serviceHeading"=> "required",
            "aboutService" => "required",
            "serviceFirms"=> "required",
            "serviceImg"=> "required",
        ],[
            "aboutService.regex" => "The Paragraph must be in between 40 to 100 characters."
        ]
    );

        $services = new services_detailModel();
        $services->serviceFirms = $request->serviceFirms;
        $services->serviceHeading = $request->serviceHeading;
        $services->aboutService = $request->aboutService;
        $FirmImgName = Str::random(10).'.'.$request->file("serviceImg")->extension();
        $request->file("serviceImg")->move(public_path("assets/Dashboard/firm_Services"), $FirmImgName);
        $services->serviceImg = $FirmImgName;
        $services->save();

        return back()->with("status","Law Firm Service Added Sucessfully.");


    }

    public function showservices(){
        $showServices = services_detailModel::all();
        return view("Lawyer Website.service-details",compact("showServices"));
    }
    
    public function servicesDetailPg($areaId = null) {
        $servicePg = services_detailModel::where('serviceFirms',$areaId)->first();
        $lawFirm = law_FirmsModel::where('id',$areaId)->first();
        return view("Lawyer Website.service-details",compact("servicePg","lawFirm"));
    }
    
    public function contactfirms(){
        $allFirms = law_FirmsModel::all();
        // dd($allFirms);
        return view("Lawyer Website.contact",compact("allFirms"));
    }

    public function contact(Request $request){

        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "contact" => "required|numeric",
            "service" => "required",
            "message" => "required"

        ]);

        $userInfo = new contactModel();
        $userInfo->name = $request->name;
        $userInfo->email = $request->email;
        $userInfo->contact = $request->contact;
        $userInfo->service = $request->service;
        $userInfo->message = $request->message;
        $userInfo->save();
        if($userInfo){
            return back()->with('status',"Your Request is Submited.");
        }
        else{
            return back()->with('status',"Your Appointment does not Booked!");
        }
    }

}
