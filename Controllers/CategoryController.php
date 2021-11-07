<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();

        return view('User.category.index',compact('data'));
    }


    public function create()
    {

        return view('User.category.add_category');
    }


    public function store(Request $request)
    {
        $validation = $request->validate([

            'category_id'=>'required',
            'np_name'=>'required',
            'slug'=>'required',
        ]);

        $data =  new Category();
        $data->category_id = $request->category_id;
        $data->np_name = $request->np_name;
        $data->slug = $request->slug;
        $data->status = $request->status;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/ProductImages'), $imageName);
        $data->image = $imageName;
        $data->save();
        return redirect()->back()->with('success','successfully Added Category');
    }


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
