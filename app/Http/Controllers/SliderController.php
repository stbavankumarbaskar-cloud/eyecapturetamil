<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Use App\Models\SliderModel;
Use App\Models\User;
Use App\Models\Category;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $adid = Session::get('adid');
        $user = User::where('id',$adid)->first();
        $slider = SliderModel::all();
        $categories = Category::all();
        return view('admin.slider.slider',['user' => $user,'categories' => $categories,'slider' => $slider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $adid = Session::get('adid');
        $user = User::where('id',$adid)->first();
        $category = Category::all();
        return view('admin.slider.addslider',['user' => $user,'category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'category' => 'required',
            'slug' => 'required',
            'btn_txt' => 'required',
            'btn_link' => 'required',
            'description' => 'required',
            'status' => 'required',

        ]);
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $filename = time().".".$extention;
            $image->move('public/upload/admins/slider/',$filename);
            
        }else{
            $filename = ''; 
        }
        $slider = new SliderModel;
        $slider->title = $request->post('slug');
        $slider->category = $request->post('category');
        $slider->Image = $filename;
        $slider->button_txt = $request->post('btn_txt');
        $slider->button_link = $request->post('btn_link');
        $slider->description = $request->post('description');
        $slider->status = $request->post('status');
        if($slider->save())
        {
            Session::flash('success_message', "Slider Added Successfully...");
            return redirect()->intended('slider');
        }else{
            Session::flash('error_message', "Slider Not Added... Please Try Again Later");
            return redirect()->intended('slider');
        }
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
