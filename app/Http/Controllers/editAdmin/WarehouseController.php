<?php

namespace App\Http\Controllers\editAdmin;

use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
     //EditMod Warehouse ("$i" is dynamic name of input text from 36 to 37 now //max=46   )
     public function index()
     {
         return view("directEdit.warehouse", with(['i' => 36]));
     }

     public function store(Request $request){
         Question::create($request->all());

    }
    
    public function update(Request $request,Question $question){
        $input = $request->all();
        $question->fill($input)->save();
    }
    
    public function delete(Question $question)
    {
        $question->delete();
    }
}
