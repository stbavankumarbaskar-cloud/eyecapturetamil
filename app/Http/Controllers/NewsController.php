<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Use App\Models\News;
use Mail;
Use App\Models\User;
Use App\Models\Category;
Use App\Models\News_views_Model; 


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adid = Session::get('adid');
        if(empty($adid)) { return redirect('admin/login'); }
        $user = User::where('id',$adid)->first();
        if(!$user) { Session::forget('adid'); return redirect('admin/login'); }
        $news = News::all();
        $categories = Category::where('parent',0)->get();
        return view('admin.news.news',['user' => $user,'categories' => $categories,'news' => $news]);

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
        $categories = Category::where('parent',0)->get();
        
        return view('admin.news.addNews',['user' => $user,'categories' => $categories]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'News_name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]); 
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $filename = time()."."."png";
            $image->move('public/upload/admins/news/',$filename);
            
        }else{
            $filename = '';  
        }
        if(!empty($request->post('important')))
        {   
            $importants = $request->post('important');
        }else{
            $importants = '';
        }
        
        if(!empty($request->post('breaking')))
        {   
            $breaking = $request->post('breaking');
        }else{
            $breaking = '';
        }
        if(!empty($request->post('slider')))
        {   
            $slider = $request->post('slider');
        }else{
            $slider = '';
        }

        
        $news = new News;
        $news->category = $request->post('category');
        $news->subcategory = $request->post('subcategory');
        $news->title = $request->post('News_name');
        $news->image = $filename; 
        $news->short_description = $request->post('short_description');
        $news->important = $importants;
        $news->breaking_news = $breaking;
        $news->slider_news = $slider;
        $news->description = $request->post('description');

        $news->status = $request->post('status');
        
        if($news->save())
        {
            try {
                $subscriptions = \App\Models\Subscription::where('status', 1)->get();
                $data = array(
                    'name' => "Eye Catch Tamil",
                    'title' => $request->post('News_name'),
                    'image' => $filename,
                    'short_desc' => $request->post('short_description')
                );
                
                foreach ($subscriptions as $row) {
                    if (!empty($row->emailId)) {
                        Mail::send('email', ['data' => $data], function($message) use ($row) {
                            $message->to($row->emailId, $row->name ?? 'Subscriber')->subject('Eye Catch Tamil - New News Alert');
                            $message->from('st.arunpandian@gmail.com', 'Eye Catch Tamil');
                        });
                    }
                }
            } catch (\Exception $e) {
                // Continue if mail server is offline
            }

            Session::flash('success_message', "News Added Successfully...");
            return redirect()->intended('news');
        }else{
            Session::flash('error_message', "News Not Added... Please Try Again Later");
            return redirect()->intended('news');
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
        $adid = Session::get('adid');
        if(empty($adid)) { return redirect('admin/login'); }
        $user = User::where('id',$adid)->first();
        if(!$user) { Session::forget('adid'); return redirect('admin/login'); }
        $news = News::find($id);
        $categories = Category::all();
        return view('admin.news.editNews',['user' => $user,'categories' => $categories,'news' => $news]);
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
        // echo "sdf";die();

        $news = News::find($id);
        request()->validate([
            'News_name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]); 
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $filename = time().".".$extention;
            $image->move('public/upload/admins/news/',$filename);
            
        }else{
            $filename = $news->image; 
        }
         if(!empty($request->post('important')))
        {   
            $importants = $request->post('important');
        }else{
            $importants = '';
        }
        
        $news->category = $request->post('category');
        $news->subcategory = $news->subcategory;
        $news->title = $request->post('News_name');
        $news->image = $filename; 
        $news->short_description = $request->post('short_description');
        $news->important = $news->important;
        $news->breaking_news = $news->breaking_news;
        $news->slider_news = $news->slider_news;
        $news->description = $request->post('description');

        $news->status = $request->post('status');

        // $input = $request->all();
        if($news->update())
        {
            Session::flash('success_message', "News Updated Successfully...");
            return redirect()->intended('news');
        }else{
            Session::flash('error_message', "News Not Updated... Please Try Again Later");
            return redirect()->intended('news');
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
        $news_view_delete = News_views_Model::where('news_id',$id)->delete();
        $check_news_views = News_views_Model::where('news_id',$id)->first();
        if($check_news_views)
        {
            if($news_view_delete)
            {
                if(News::destroy($id))
                {
                    Session::flash('success_message', "News Deleted Successfully...");
                    return redirect()->intended('news');
                }else{
                    Session::flash('error_message', "News Not Deleted... Please Try Again Later");
                    return redirect()->intended('news');
                }
            }else{
                 Session::flash('error_message', "News Not Deleted... Please Try Again Later");
                    return redirect()->intended('news');
            }
        }else{
            if(News::destroy($id))
            {
                Session::flash('success_message', "News Deleted Successfully...");
                return redirect()->intended('news');
            }else{
                Session::flash('error_message', "News Not Deleted... Please Try Again Later");
                return redirect()->intended('news');
            }
        }
    }

    public function changeStatus($id)
    {
        $news = News::find($id);
        if ($news) {
            $news->status = $news->status == 1 ? 0 : 1;
            $news->save();
            $statusText = $news->status == 1 ? 'Activated' : 'Deactivated';
            Session::flash('success_message', "News item has been {$statusText}!");
        }
        return redirect()->back();
    }
}
