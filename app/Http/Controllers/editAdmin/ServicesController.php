<?php

namespace App\Http\Controllers\editAdmin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //EditMod services ("$i" is dynamic name of input text from 21 to 30 now //max=35   )
    public function index()
    {
        return view("directEdit.services", with(['i' => 21]));
    }

    public function store(Request $request, $dad)
    {
        //"save logo in folder" function 
        $logo = $this->fileStore($request->logo_, $request['title_en'], 'services_logo');

        Service::create([
            'title_ar'       => $request['title_ar'],
            'title_en'       => $request['title_en'],
            'description_ar' => $request['description_ar'],
            'description_en' => $request['description_en'],
            'parent_service' => $dad,
            'logo'           => "/services_logo/$logo",
        ]);

        return back();
    }

    //create MainService;
    public function storeDad(Request $request)
    {   
        $logo = $this->fileStore($request->logo_, $request['title_en'], 'services_logo');
        $service = new Service;
        $service->logo     = "/services_logo/$logo";
        $service->title_ar =  $request->title_ar;
        $service->title_en =  $request->title_en;
        
        $service->save();
        return back();
    }
    
    public function form($id)
    {
        return view('directEdit.layout.edit',with(['id'=>$id]));
    }
    public function update(Request $request, Service $id)
    {
        $id->update( $request->all());
        return redirect(route('serviceEd' ));

    }


    public function delete(Service $id)
    {
        foreach ($id->sons as $sub) {
            $sub->delete();
        }
        $id->delete();
        return back();
    }


    //file save function
    public function fileStore($request_file, $title, $path)
    {
        $file_extinsion = $request_file->getClientOriginalExtension();
        $file_name      = $title . time() . '.' . $file_extinsion;
        $request_file->move($path, $file_name);
        return  $file_name;
    }
}
