<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CourseAppointment;
use Redirect, Input, Auth;

class CourseAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

     {
        return view('courseAppointment')->with('CourseAppointment',CourseAppointment::orderBy('pubdate','desc')->paginate(30));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('addAppointment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {   
        // if(isset($request->mobile)){            
        // $appointment = new CourseAppointment;        
        // $appointment->mobile = $request->mobile;
        // $appointment->babyname = $request->babyname;
        // $appointment->babymonth= $request->babymonth;        
        // $appointment->city    = $request->city;
        // $appointment->address = $request ->address;
        // $appointment->pubdate = $request ->pubdate;
        // $appointment->save();
        //}        
        
        return view("test",['name'=>var_dump($request)]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
