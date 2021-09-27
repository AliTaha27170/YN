<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Composers\staticText;
use App\Service;
use App\TextEditing;
use App\video;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class textComposer
{


    public function compose(View $view)
    {

        $text = TextEditing::get();
        if (!count($text) ) {
            for ($i = 1; $i < 71; $i++) {
                $text = new TextEditing;
                $text->title =  '***';
                $text-> ar    =  "النص فارغ";
                $text-> en    =  'The text empty';
                $text->save();
            }
            video::create(["url"=>"https://www.youtube.com/embed/RdtTF-Lvt-4"]);
            $text =TextEditing::get();
        }
        $video=video::first()->url;

        $services=Service::get();
        $local=(LaravelLocalization::getCurrentLocale() );
        $title="title_$local";
        $description="description_$local";
        $key=0;
        $view->with(['text'        =>$text,
                     'services'    =>$services ,
                     'local'       =>$local,
                     'title'       =>$title ,
                     'description' =>$description ,
                     "key"         =>$key,
                     "video"       =>$video
                     ]);
    }
}
