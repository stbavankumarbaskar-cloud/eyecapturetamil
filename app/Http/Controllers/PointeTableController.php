<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\PointModel; 
Use App\Models\User;
Use App\Models\Team;
use Illuminate\Support\Facades\Hash;
Use App\Models\Category;
Use App\Models\SportsCategory;
use Session;

class PointeTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adid = Session::get('adid');
        $user = User::where('id',$adid)->first();
        $points = PointModel::all();
        $teams = Team::all();
        $category = SportsCategory::all();
        return view('admin.sports.point_table',['user' => $user,'points' => $points,'category' => $category,'teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        request()->validate([
            'sports_parent_category' => 'required',
            'sports_sub_category' => 'required',
            'sports_name' => 'required',
            'tname' => 'required',
            'status' => 'required',
        ]); 
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $filename = time().".".$extention;
            $image->move('upload/admins/team/',$filename);
            
        }else{
            $filename = ''; 
        } 
        $team = new Team;
        $team->category = $request->post('sports_parent_category');
        $team->sub_category = $request->post('sports_sub_category');
        $team->sports_category = $request->post('sports_name');
        $team->image = $filename;
        $team->tname = $request->post('tname');
        $team->status = $request->post('status');
        
        if($team->save())
        {
            Session::flash('success_message', "Team Added Successfully...");
            return redirect()->intended('point_table');
        }else{
            Session::flash('error_message', "Team Not Added... Please Try Again Later");
            return redirect()->intended('point_table');
        }

    } 

    public function getSubCategory(Request $request)
    {
        // echo $request->post('mainCategory');
        $subcate = SportsCategory::where('parent',$request->post('mainCategory'))->get();
        // echo "<pre>";print_r($subcate);die();
        $option = "<option value='0'>Select Category</option>";
        foreach ($subcate as $subcategory) {
            $option .= "<option value=".$subcategory->id.">".$subcategory->category_name."</option>";
             
        }
        echo $option;

    }

    public function getSportsName(Request $request)
    {
        // echo $request->post('mainCategory');
        $subcate = SportsCategory::where('parent',$request->post('sportsname'))->get();
        // echo "<pre>";print_r($subcate);die();
        $option = "<option value='0'>Select Sport</option>";
        foreach ($subcate as $subcategory) {
            $option .= "<option value=".$subcategory->id.">".$subcategory->category_name."</option>";
             
        }
        echo $option;

    }

    public function getAllTeams(Request $request)
    {
        // echo $request->post('team');die();
        $subcate = Team::where('sports_category',$request->post('team'))->get();
        // echo "<pre>";print_r($subcate);die();
        $option = "<option value='0'>Select Team</option>";
        foreach ($subcate as $subcategory) {
            $option .= "<option value=".$subcategory->id.">".$subcategory->tname."</option>";
             
        }
        echo $option;

    }

    public function getTeamPoint(Request $request)
    {
        // echo $request->post('team');die();
        $teampointDet = PointModel::where('team',$request->post('teamname'))->first();
        // echo "<pre>";print_r($teampointDet);die();

        echo json_encode($teampointDet);

    }


    public function addCategory(Request $request)
    {
        request()->validate([
            'parent' => 'required',
            'category_name' => 'required',
            'status' => 'required',

        ]);
        $s_category = new SportsCategory;
        $s_category->parent = $request->post('parent');
        $s_category->category_name = $request->post('category_name');
        $s_category->status = $request->post('status');
        if($s_category->save())
        {
            Session::flash('success_message', "Category Added Successfully...");
            return redirect()->intended('point_table');
        }else{
            Session::flash('error_message', "Category Not Added... Please Try Again Later");
            return redirect()->intended('point_table');
        }
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
            'parent_category' => 'required',
            'sports_category' => 'required',
            'sports_type' => 'required',
            'teams' => 'required',
            'win' => 'required',
            'lose' => 'required',
            'nrr' => 'required',
            'status' => 'required', 
        ]); 
        $point = new PointModel;
        $point->parent_category = $request->post('parent_category');
        $point->sports_category = $request->post('sports_category');
        $point->sports_type = $request->post('sports_type');
        $point->team = $request->post('teams');
        $point->win = $request->post('win');
        $point->lose = $request->post('lose');
        $point->nrr = $request->post('nrr');
        $point->status = $request->post('status');
        
        if($point->save())
        {
            Session::flash('success_message', "Point Added Successfully...");
            return redirect()->intended('point_table');
        }else{
            Session::flash('error_message', "Point Not Added... Please Try Again Later");
            return redirect()->intended('point_table');
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
