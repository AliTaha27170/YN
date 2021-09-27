<?php

namespace App\Http\Controllers\editAdmin;

use App\Http\Controllers\Controller;
use App\TextEditing;
use App\video;
use Illuminate\Http\Request;

class textContorller extends Controller
{


    public  function text()
    {
        $dynamic_text = TextEditing::get();
        return $dynamic_text;
    }


    //to update dynamic text
    public function update(Request $request, $from, $to)
    {   echo $request["11"];
        for ($i = $from; $i <= $to; $i++) {
            if ($i==1)
            {
                $text = TextEditing::find($i);
            $text->update(['ar' => $request["$i"], 'en' => $request["a"]]);
            }
            else
            {
                $text = TextEditing::find($i);
                $text->update(['ar' => $request["$i"], 'en' => $request["$i$i"]]);
            }
  
        }
        
        $id=$request->video;
       // video ::find(1)->update(["url"=>"https://www.youtube.com/embed/$id"]);
        return back();
    }

    //EditMod home ("$i" is dynamic name of input text from 1 to 14 now //max=20   )

    public function home(){
            return view("directEdit.home", with(['i' => 1]));
    }
}
