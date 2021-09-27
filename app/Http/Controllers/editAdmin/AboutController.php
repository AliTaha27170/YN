<?php

namespace App\Http\Controllers\editAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
     //EditMod About ("$i" is dynamic name of input text from 56 to 56 now //max=70 you can add more  )
     public function index()
     {
         return view("directEdit.about", with(['i' => 56]));
     }
}
