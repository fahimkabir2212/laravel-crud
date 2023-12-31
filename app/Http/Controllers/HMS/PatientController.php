<?php

namespace App\Http\Controllers\HMS;

use App\Http\Controllers\Controller;
use App\Models\HMS\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //view
    public function viewPatient(){
        $patient = Patient::all();
        return view('patientList')->with('patients',$patient);
    }
    public function createPatient(){
        return view('createPatient');
    }
    public function storePatient(Request $request){
        $this -> validate($request,
        [
            "name"=>"required|regex:^[a-zA-Z\s\.\-]+$^",//SMALL AND CAPITAL & . & - ACCEPTED
            "email"=>"required|regex:/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}+$/i",//like: abc@gmail.com
            "phone"=>"required",
            "dob" => "required",
            "patient_type" => "required",
            "gender" => "required"
        ],[
            "name.required"=> "Please provide your name!!!",
            "name.regex"=> "Please provide your name properly (. & - is accepted)!!!",
            "email.required"=> "Please provide your email!!!",
            "email.regex"=> "Please provide correct email like abc@gmail.com!!!",
            "phone.required"=>"Please provide correct phone number!",
            "dateOfBirth.required" => "Please provide DOB!!!",
            "patientType.required" => "Please provide the patient type!!",
        ]
    );
    $pt = new Patient();
    $pt -> name = $request ->name;
    $pt -> email = $request ->email;
    $pt -> phone = $request ->phone;
    $pt -> dob = $request ->dob;
    $pt -> patient_type = $request ->patient_type;
    $pt -> gender = $request ->gender;
    $pt->save();

    return redirect('/');

    }

    public function showPatient($id){
        
        $data = Patient::find($id);
        return view('editPatient',['data'=>$data]);
    }

    public function editPatient(Request $req){
        $this -> validate($req,
        [
            "name"=>"required|regex:^[a-zA-Z\s\.\-]+$^",//SMALL AND CAPITAL & . & - ACCEPTED
            "email"=>"required|regex:/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}+$/i",//like: abc@gmail.com
            "phone"=>"required",
            "dob" => "required",
            "patient_type" => "required",
            "gender" => "required"
        ],[
            "name.required"=> "Please provide your name!!!",
            "name.regex"=> "Please provide your name properly (. & - is accepted)!!!",
            "email.required"=> "Please provide your email!!!",
            "email.regex"=> "Please provide correct email like abc@gmail.com!!!",
            "phone.required"=>"Please provide correct phone number!",
            "dateOfBirth.required" => "Please provide DOB!!!",
            "patientType.required" => "Please provide the patient type!!",
        ]
    );
    $pt = Patient::find($req->id);
    $pt -> name = $req ->name;
    $pt -> email = $req ->email;
    $pt -> phone = $req ->phone;
    $pt -> dob = $req ->dob;
    $pt -> patient_type = $req ->patient_type;
    $pt -> gender = $req ->gender;
    $pt->save();

    return redirect()->route('view.patient');

    }
    public function deletePatient(Request $request){
        $id = $request -> id;
        $data = Patient::where('id',$id)->first();
        $data->delete();
        return redirect()->back();
    }
}
