<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\SubAdmins; 
Use App\Models\User;
use Illuminate\Support\Facades\Hash;
Use App\Models\Category;
use Session;


class SubAdminController extends Controller
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
        if(empty($adid)) { return redirect('admin/login'); }
        $user = User::where('id',$adid)->first();
        if(!$user) { Session::forget('adid'); return redirect('admin/login'); }
        $admins = SubAdmins::all();
        return view('admin.subadmin.subadmins',['user' => $user,'admins' => $admins]);

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
        if(empty($adid)) { return redirect('admin/login'); }
        $user = User::where('id',$adid)->first();
        if(!$user) { Session::forget('adid'); return redirect('admin/login'); }
        $admins = SubAdmins::all();
        $category = Category::where('parent',1)->get();
        return view('admin.subadmin.addSubAdmin',['user' => $user,'admins' => $admins,'category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'type' => 'required',
            'district' => 'required',
            'password' => 'required',
            'confirmpassword' => 'required',
            'status' => 'required',
        ]);
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $filename = time().".".$extention;
            $image->move('upload/admins/',$filename);
            
        }else{
            $filename = ''; 
        }

        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->type = $request->post('type');
        $user->district = $request->post('district');
        $user->password = Hash::make($request->post('password'));
        $user->forgotCode = '';
        $user->forgotStatus = '';
        $user->status = $request->post('status');
        $user->image = $filename;
        $user->save();
        return redirect('addSubAdmin')->withSuccess('Register Successfully');
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
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect('subadmin')->withSuccess('Sub Admin Deleted Successfully');
        }
        return redirect('subadmin')->withSuccess('Sub Admin Not Found');
    }
}
