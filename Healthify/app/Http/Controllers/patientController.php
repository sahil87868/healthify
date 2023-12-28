<?php

namespace App\Http\Controllers;


use App\Models\patient;
use App\Models\role;
use Illuminate\Http\Request;
use Session;
use Alert;
class patientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function login()
     {
        return view('PATIENTS/login');   
     }
     public function loginauth(Request $request)
     {
        $data=patient::where('name','=',$request->name)->first();
        if($data)
        {
            session()->put('userid',$data->id);
            session()->put('name',$data->name);


            Alert::success('congrats','login success');
            return redirect('index');        }
     }
     public function logout()
     {
         session()->pull('userid');
             session()->pull('name');
 
             Alert::success('congrats','logout success');
             return redirect('login');
     }
     
     public function create()
    {
        $data=role::all();
        return view('PATIENTS/signup',['data'=>$data]);  

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new patient;
        $data->role=$request->role;
        $data->name=$request->name;
        $data->lastname=$request->lastname;
        $data->email=$request->email;
        $data->contact=$request->contact;
        $data->save();
        return view('PATIENTS/index');  
        Alert::success('congrats','signup success');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(patient $patient)
    {
        $data=patient::all();
        return view('PATIENTS/about',['data'=>$data]);
    }
    public function ashow(patient $patient)
    {
        $data=patient::all();
        return view('admin/doctors',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(patient $patient)
    {
        //
    }
}
