<?php

namespace App\Http\Controllers\editAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //EditMod contact ("$i" is dynamic name of input text from 51 to 51 now //max=55   )
    public function index()
    {
        return view("directEdit.contact", with(['i' => 51]));
    }
}
