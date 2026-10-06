<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Use App\Models\BreakingNews;
Use App\Models\User;
Use App\Models\Category;

class BreakingNewsController extends Controller
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
        $news = BreakingNews::all();
        $categories = Category::all();
        return view('admin.breakingNews.news',['user' => $user,'categories' => $categories,'news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adid = Session::get('adid');
        if(empty($adid)) { return redirect('admin/login'); }
        $user = User::where('id',$adid)->first();
        if(!$user) { Session::forget('adid'); return redirect('admin/login'); }
        $news = BreakingNews::all();
        $categories = Category::all();
        return view('admin.breakingNews.addBreakingNews',['user' => $user,'categories' => $categories,'news' => $news]);
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
        $request->validate([
            'news' => 'required',
            'link' => 'required',
            'status' => 'required',
            
        ]);
        $breaking_news = new BreakingNews;
        $breaking_news->news = $request->post('news');
        $breaking_news->link = $request->post('link');
        $breaking_news->status = $request->post('status');
        if($breaking_news->save())
        {
            Session::flash('success_message', "Breaking News Added Successfully...");
            return redirect()->intended('breaking-news');
        }else{
            Session::flash('error_message', "Breaking News Not Added... Please Try Again Later");
            return redirect()->intended('breaking-news');
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
        $adid = Session::get('adid');
        if(empty($adid)) { return redirect('admin/login'); }
        $user = User::where('id',$adid)->first();
        if(!$user) { Session::forget('adid'); return redirect('admin/login'); }
        $edit_breaking_news = BreakingNews::find($id);
         return view('admin.breakingNews.editBreakingNews',['user' => $user,'edit_breaking_news' => $edit_breaking_news]);
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
        $breaking_news = BreakingNews::find($id);
        $request->validate([
            'news' => 'required', 
            'link' => 'required',
            'status' => 'required',
            
        ]);
        $insertArray = $request->all();
        
        if($breaking_news->update($insertArray))
        {
            Session::flash('success_message', "Breaking News Updated Successfully...");
            return redirect()->intended('breaking-news');
        }else{
            Session::flash('error_message', "Breaking News Not Updated... Please Try Again Later");
            return redirect()->intended('breaking-news');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(BreakingNews::destroy($id))
        {
            Session::flash('success_message', "Breaking News Deleted Successfully...");
            return redirect()->intended('breaking-news');
        }else{
            Session::flash('error_message', "Breaking News Not Deleted... Please Try Again Later");
            return redirect()->intended('breaking-news');
        }
        
    }
}
