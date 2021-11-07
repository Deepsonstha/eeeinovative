<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showpage()
    {
        $show = User::all();
        return view('User.show',compact('show'));
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

           $validation = $request->validate([

            'name'=>'required',
            'gender'=>'required',
            'email'=>'required',
            'password'=>'required',
            'address'=>'required',


        ]);


        $userdata = new User;
        $userdata->name= $request->name;
        $userdata->gender= $request->gender;
        $userdata->email = $request->email;
        $userdata->designation = $request->designation;
        $userdata->password = $request->password;
        $userdata->address = $request->address;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/UserImages'),$imageName);
        $userdata->profile_photo_path = $imageName;
        $userdata->save();

        return redirect()->back()->with('success','Successfully  inserted data');
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
