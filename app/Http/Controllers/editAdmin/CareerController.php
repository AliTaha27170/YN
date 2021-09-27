<?php

namespace App\Http\Controllers\editAdmin;

use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    //EditMod services ("$i" is dynamic name of input text from 47 to 47 now //max=50   )
    public function index()
    {
        return view("directEdit.career", with(['i' => 47]));
    }
}
