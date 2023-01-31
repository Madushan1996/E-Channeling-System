<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient=new Patient;

        $this->validate($request,[
            'f_name'=> 'required|string|min:1|max:255',
            'l_name'=> 'required|string|min:1|max:255',
            'house_no'=> 'required|numeric',
            'street_no'=> 'required|numeric',
            'city'=> 'required',
            'telno'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'nic'=> 'required|min:10|max:12',
            'blood_group'=> 'required',
            'age'=> 'required|numeric|min:1|max:120',
            'email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'password' => 'required|same:confirm-password',
        ]);

        $user = new User;

        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $patient = new Patient;

        $patient->house_no = $request->house_no;
        $patient->street_no = $request->street_no;
        $patient->city = $request->city;
        $patient->telno = $request->telno;
        $patient->blood_group = $request->blood_group;
        $patient->nic = $request->nic;
        $patient->age = $request->age;

        $user->patient()->save($patient);

        $user->assignRole('patient');

        return redirect()->route('patients.index')
                            ->with('success','Patient created successfully.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
