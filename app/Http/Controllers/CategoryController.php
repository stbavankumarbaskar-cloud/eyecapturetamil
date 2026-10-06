<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Category;
use Session;
Use App\Models\SubAdmins;
Use App\Models\User;

class CategoryController extends Controller
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
        $admins = SubAdmins::all();
        $categories = Category::all();
        return view('admin.category.categories',['user' => $user,'admins' => $admins,'categories' => $categories]);

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
        $category = Category::where('parent',0)->get();
        return view('admin.category.addCategory',['user' => $user,'admins' => $admins,'category' => $category]);
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
            'parent' => 'required',
            'category_name' => 'required',
            'status' => 'required',

        ]);
        $category = new Category;
        $category->parent = $request->post('parent');
        $category->category_name = $request->post('category_name');
        $category->status = $request->post('status');
        if($category->save())
        {
            Session::flash('success_message', "Category Added Successfully...");
            return redirect()->intended('categories');
        }else{
            Session::flash('error_message', "Category Not Added... Please Try Again Later");
            return redirect()->intended('addCategory');
        }
        

    }

    public function getAllSubCategory(Request $request)
    {
        $subcate = Category::where('parent',$request->post('mainCategory'))->get();
        // echo "<pre>";print_r($subcate);die();
        $option = "<option value='0'>Select Category</option>";
        foreach ($subcate as $subcategory) {
            $option .= "<option value=".$subcategory->id.">".$subcategory->category_name."</option>";
             
        }
        echo $option;
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
        $categoryDet = Category::find($id);
        $categories = Category::all();
        return view('admin.category.editCategory',['user' => $user,'categoryDet' => $categoryDet,'categories' => $categories]);

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
        $category = Category::find($id);
        request()->validate([
            'parent' => 'required',
            'category_name' => 'required',
            'status' => 'required',

        ]);
        $input = $request->all();
        if($category->update($input))
        {
            Session::flash('success_message', "Category Added Successfully...");
            return redirect()->intended('categories');
        }else{
            Session::flash('error_message', "Category Not Added... Please Try Again Later");
            return redirect()->intended('addCategory');
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
        $category = Category::destroy($id);
        if($category)
        {
            Session::flash('success_message', "Category Deleted Successfully...");
            return redirect()->intended('categories');
        }else{
            Session::flash('error_message', "Category Not Deleted... Please Try Again Later");
            return redirect()->intended('categories');
        }
    }

    public function changeStatus($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->status = $category->status == 1 ? 0 : 1;
            $category->save();
            $statusText = $category->status == 1 ? 'Activated' : 'Deactivated';
            Session::flash('success_message', "Category '{$category->category_name}' has been {$statusText}!");
        }
        return redirect()->back();
    }
}
