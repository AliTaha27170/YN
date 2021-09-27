<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactMessages;
use GuzzleHttp\Middleware;

class AdminController extends Controller
{

    public  function  __construct()
    {
        $this->middleware('AdminLogin');
    }

    function LoginPage(){
        return view("admin.layout.app");
    }

    public function contactMessages()
    {
        $msgs = ContactMessages::all();
        return view("admin.contactMessages")->with("msgs", $msgs);
    }
}
