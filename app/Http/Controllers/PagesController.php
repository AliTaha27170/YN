<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Jobs;
use App\JobsRequests;
use App\ContactMessages;

class PagesController extends Controller
{
    function home(){
        return view("home");
    }

    function career(){
        
        Session::remove("isSuccess");
        $jobs = Jobs::all();
        return view("career")->with("jobs", $jobs);
    }

    function postJobRequest(Request $request){
        $valid = Validator::make($request->all(), [
            "name"=> "required",
            "email"=> "required",
            "phone"=> "required",
            "job"=> "required",
            "about"=> "required"
        ]);

        if($valid->fails() || !$request->hasFile("resume")){
            Session::put("isSuccess", false);
            return redirect("/career");
        }

        $path = Storage::disk('resumes_store')->put("", $request->file("resume"));
        
        $req = new JobsRequests([
            "name"=>$request->input("name"),
            "email"=>$request->input("email"),
            "phone"=>$request->input("phone"),
            "job"=>$request->input("job"),
            "about"=>$request->input("about"),
            "resume"=>$path
        ]);
        
        $req->save();
        Session::put("isSuccess", true);
        return redirect("/career");
        
    }

    public function postContact(Request $request)
    {
        $valid = Validator::make($request->all(), [
            "name"=> "required",
            "email"=> "required",
            "subject"=> "required",
            "message"=> "required"
        ]);

        if($valid->fails()){
            Session::put("isSuccess", false);
            return redirect("/contact");
        }

        $req = new ContactMessages([
            "name"=>$request->input("name"),
            "email"=>$request->input("email"),
            "subject"=>$request->input("subject"),
            "message"=>$request->input("message")
        ]);
        
        $req->save();
        Session::put("isSuccess", true);
        return redirect("/contact");
    }

    function services(){
        return view("services");
    }

    function warehouse(){
        return view("warehouse");
    }

    function contact(){
        Session::remove("isSuccess");
        return view("contact");
    }

    function about(){
        return view("about");
    }
}
