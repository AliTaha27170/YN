<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\JobsRequests;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    { 
        $this->middleware('AdminLogin');
    }

    public function index()
    {
        $jobs = Jobs::all();
        return view("admin.jobsIndex")->with("jobs", $jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.jobsCreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "description" => "required",
            "location" => "required"
        ]);

        $job = new Jobs([
            "title"=> $request->input("title"),
            "description"=> $request->input("description"),
            "location"=> $request->input("location")
        ]);

        $job->save();
        return redirect("/manage/jobs");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Jobs::find($id);
        return view("admin.jobsEdit")->with("job", $job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "title" => "required",
            "description" => "required",
            "location" => "required"
        ]);

        $job = Jobs::find($id);
        $job->title = $request->input("title");
        $job->description = $request->input("description");
        $job->location = $request->input("location");
        $job->save();

        return redirect("/manage/jobs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Jobs::find($id);
        $job->delete();
        return redirect("manage/jobs");
    }

    public function jobRequests()
    {
        $resumes = JobsRequests::all();
        return view("admin.jobRequests")->with("resumes", $resumes);
    }
}
