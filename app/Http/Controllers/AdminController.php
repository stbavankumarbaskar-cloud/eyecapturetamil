<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(empty(Session::get('adid')))
        {
            return view('admin.login');
        }else{
            return redirect()->intended('dashboard'); 
        }
    }

    public function login(Request $request)
    {
        if(empty(Session::get('adid')))
        {
            request()->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            $email  = $request->post('email');
            $password  = $request->post('password');
            
            if (Auth::attempt(['email'=>$email,'password'=>$password])) {
                $user = User::where('email',$email)->first();
                Auth::login($user);
                Session::put('adid', $user->id);
                // Authentication passed...
                return redirect()->intended('dashboard');
            }
            return Redirect::to("admin/login")->withSuccess('Oppes! You have entered invalid credentials');
        }else{
            return redirect()->intended('dashboard'); 
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->intended('admin/login');
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
        //
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
