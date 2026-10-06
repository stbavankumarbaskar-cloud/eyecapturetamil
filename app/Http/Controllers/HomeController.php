<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\BreakingNews;
use App\Models\News;
use App\Models\Category;
use Response;
use App\Models\Team;
use App\Models\PointModel; 
use App\Models\Subscription;
use App\Models\News_views_Model; 
use App\Models\SliderModel;

class HomeController extends Controller
{
    public function __construct()
    {
         ini_set('memory_limit', '656M');
    }

    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->orderBy('id', 'desc')->get();
        $recentNews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->orderBy('id', 'asc')->get();
        $category = Category::where(function($q){ $q->where('parent', 0)->orWhere('parent', '0'); })->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        $slider = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->orderBy('id', 'desc')->take(10)->get();
        $popular_news = News_views_Model::orderBy('view','DESC')->get();
        $pointTable = PointModel::orderBy('win', 'DESC')->orderBy('nrr', 'DESC')->get();
        $teams = Team::all();
        $Breakingnews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();

        return view('index',[
            'Breakingnews' => $Breakingnews,
            'news' => $news,
            'slider' => $slider,
            'teams' => $teams,
            'recentNews' => $recentNews,
            'pointTable' => $pointTable,
            'category' => $category,
            'popular_news' => $popular_news
        ]);
    }

    public function getAllNews()
    {
        $news = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->orderBy('id', 'DESC')->take(10)->get();
        $recentNews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->orderBy('id', 'DESC')->get();
        $category = Category::where(function($q){ $q->where('parent', 0)->orWhere('parent', '0'); })->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        $slider = SliderModel::all();
        $popular_news = News_views_Model::orderBy('view','DESC')->get();
        $pointTable = PointModel::orderBy('win', 'DESC')->orderBy('nrr', 'DESC')->get();
        $teams = Team::all();
        $Breakingnews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
         
        header("Content-Type:application/vnd.api+json");
       
        return Response::json([
           'status' => 200,
           'category' => $category,
           'news' => $news,
        ], 200);
    }

    public function subscription($value='')
    {
        $recentNews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->orderBy('id', 'ASC')->get();
        $category = Category::where(function($q){ $q->where('parent', 0)->orWhere('parent', '0'); })->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        $news = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        $popular_news = News_views_Model::orderBy('view','DESC')->get();
        $slider = SliderModel::all();
        $pointTable = PointModel::orderBy('win', 'DESC')->orderBy('nrr', 'DESC')->get();
        $teams = Team::all();
        $Breakingnews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();

        return view('subscription',[
            'Breakingnews' => $Breakingnews,
            'slider' => $slider,
            'teams' => $teams,
            'recentNews' => $recentNews,
            'pointTable' => $pointTable,
            'category' => $category,
            'popular_news' => $popular_news,
            'news' => $news
        ]);
    }

    public function add_subscription(Request $request)
    {
        $request->validate([
            'emailid' => 'required',
        ]);
        $subscriptions = new Subscription;
        $subscriptions->name = $request->post('name') ? trim($request->post('name')) : 'User';
        $subscriptions->emailId = trim($request->post('emailid'));
        $subscriptions->status = 1;
        if($subscriptions->save())
        {
            Session::put('logged_user_name', $subscriptions->name);
            Session::put('logged_user_email', $subscriptions->emailId);

            if ($request->ajax() || $request->wantsJson() || $request->header('X-Requested-With') === 'XMLHttpRequest') {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Subscribed & Logged in Successfully!',
                    'user_name' => $subscriptions->name,
                    'user_email' => $subscriptions->emailId
                ]);
            }
            Session::flash('success_message', "Subscription Added Successfully...");
            return redirect()->intended('subscription');
        }else{
            if ($request->ajax() || $request->wantsJson() || $request->header('X-Requested-With') === 'XMLHttpRequest') {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Subscription Not Added... Please Try Again Later'
                ], 422);
            }
            Session::flash('error_message', "Subscription Not Added... Please Try Again Later");
            return redirect()->intended('subscription');
        }
    }

    public function user_logout()
    {
        Session::forget('logged_user_name');
        Session::forget('logged_user_email');
        return redirect()->back();
    }

    public function newsDetail($id)
    {
        $popular_news = News_views_Model::orderBy('view','DESC')->get();
        $news = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        $recentNews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->orderBy('id', 'DESC')->get();
        $newsDet = News::where('id', $id)->first();
        $pointTable = PointModel::orderBy('win', 'DESC')->orderBy('nrr', 'DESC')->get();
        $teams = Team::all();
        $category = Category::where(function($q){ $q->where('parent', 0)->orWhere('parent', '0'); })->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        $Breakingnews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        $find_News_views = News_views_Model::where('news_id', $id)->first();
        
        if($newsDet)
        {
            if($find_News_views)
            {
                $total_views = News_views_Model::where('news_id', $id)->first();
                $add_view = $total_views->view + 1;
                $input = array(
                    'news_id' => $id,
                    'view' => $add_view,
                    'status' => 1
                );
                $find_News_views->update($input);
            }else{
                $news_view = new News_views_Model;
                $news_view->news_id = $id;
                $news_view->view = 1;
                $news_view->status = 1;
                $news_view->save();
            }
            return view('newsDet',[
                'Breakingnews' => $Breakingnews,
                'newsDet' => $newsDet,
                'teams' => $teams,
                'recentNews' => $recentNews,
                'pointTable' => $pointTable,
                'category' => $category,
                'news' => $news,
                'popular_news' => $popular_news
            ]);
        }else{
            return view('newsnotfound',[
                'Breakingnews' => $Breakingnews,
                'newsDet' => $newsDet,
                'teams' => $teams,
                'recentNews' => $recentNews,
                'pointTable' => $pointTable,
                'category' => $category,
                'news' => $news,
                'popular_news' => $popular_news
            ]);
        }
    }

    public function searchNews(Request $request)
    {
        $search = trim($request->input('search'));
        $query = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); });

        if (!empty($search)) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('short_description', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%");
            });
            $cate_det = (object)[
                'id' => 0,
                'category_name' => 'தேடல் முடிவுகள் (Search): "' . $search . '"'
            ];
        } else {
            $cate_det = (object)[
                'id' => 0,
                'category_name' => 'தேடல் முடிவுகள் (Search Results)'
            ];
        }

        $news = $query->orderBy('id', 'DESC')->paginate(10)->appends(['search' => $search]);
        $recentNews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->orderBy('id', 'ASC')->get();
        $sub_category = collect([]);
        $category = Category::where(function($q){ $q->where('parent', 0)->orWhere('parent', '0'); })->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        $popular_news = News_views_Model::orderBy('view', 'DESC')->get();
        $slider = SliderModel::all();
        $pointTable = PointModel::orderBy('win', 'DESC')->orderBy('nrr', 'DESC')->get();
        $teams = Team::all();
        $Breakingnews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();

        return view('allnews', [
            'Breakingnews' => $Breakingnews,
            'news' => $news,
            'slider' => $slider,
            'teams' => $teams,
            'recentNews' => $recentNews,
            'pointTable' => $pointTable,
            'category' => $category,
            'cate_det' => $cate_det,
            'popular_news' => $popular_news,
            'sub_category' => $sub_category
        ]);
    }

    public function categoryByNews(Request $request, $id)
    {
        $search = trim($request->input('search'));
        if (!empty($search)) {
            return $this->searchNews($request);
        }

        $news = News::where('category', $id)->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->orderBy('id', 'DESC')->paginate(10);
        $recentNews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->orderBy('id', 'ASC')->get();
        $sub_category = Category::where('parent', $id)->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        $category = Category::where(function($q){ $q->where('parent', 0)->orWhere('parent', '0'); })->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        $cate_det = Category::where('id', $id)->first();
        $popular_news = News_views_Model::orderBy('view', 'DESC')->get();
        $slider = SliderModel::all();
        $pointTable = PointModel::orderBy('win', 'DESC')->orderBy('nrr', 'DESC')->get();
        $teams = Team::all();
        $Breakingnews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        
        return view('allnews', [
            'Breakingnews' => $Breakingnews,
            'news' => $news,
            'slider' => $slider,
            'teams' => $teams,
            'recentNews' => $recentNews,
            'pointTable' => $pointTable,
            'category' => $category,
            'cate_det' => $cate_det,
            'popular_news' => $popular_news,
            'sub_category' => $sub_category
        ]);
    }

    public function sub_categoryByNews($id)
    {
        $news = News::where('subcategory', $id)->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->paginate(10);
        $recentNews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->orderBy('id', 'ASC')->get();
        $category = Category::where(function($q){ $q->where('parent', 0)->orWhere('parent', '0'); })->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        $sub_category = Category::where('parent', $id)->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        $cate_det = Category::where('id', $id)->first();
        $popular_news = News_views_Model::orderBy('view', 'DESC')->get();
        $slider = SliderModel::all();
        $pointTable = PointModel::orderBy('win', 'DESC')->orderBy('nrr', 'DESC')->get();
        $teams = Team::all();
        $Breakingnews = News::where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();
        
        return view('allnews', [
            'Breakingnews' => $Breakingnews,
            'news' => $news,
            'slider' => $slider,
            'teams' => $teams,
            'recentNews' => $recentNews,
            'pointTable' => $pointTable,
            'category' => $category,
            'cate_det' => $cate_det,
            'popular_news' => $popular_news,
            'sub_category' => $sub_category
        ]);
    }

    public function apicategoryByNews($id)
    {
        $news = News::where('category', $id)->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->orderBy('id', 'DESC')->take(8)->get();
        $category = Category::where(function($q){ $q->where('parent', 0)->orWhere('parent', '0'); })->where(function($q){ $q->where('status', '1')->orWhere('status', 1); })->get();

        header("Content-Type:application/json");
        
        return Response::json([
            'status' => 200,
            'news' => $news,
        ], 200);
    }

    public function PrivacyPolicy($value='')
    {
        return view('privacy_policy');
    }
}
