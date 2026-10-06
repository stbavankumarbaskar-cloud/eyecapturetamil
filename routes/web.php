<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BreakingNewsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PointeTableController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/',[HomeController::class,'index']);
Route::get('sub_category_ByNews/{id}',[HomeController::class,'sub_categoryByNews']);

Route::get('search',[HomeController::class,'searchNews']);
Route::get('category/{id}',[HomeController::class,'categoryByNews']);
Route::get('subscription',[HomeController::class,'subscription']);
Route::post('add_subscription',[HomeController::class,'add_subscription']);
Route::get('user_logout',[HomeController::class,'user_logout']);
Route::get('getAllNews',[HomeController::class,'getAllNews']);
Route::get('new-Detail/{id}',[HomeController::class,'newsDetail']);

// Admin Auth
Route::get('admin',[AdminController::class,'index']);
Route::get('admin/login',[AdminController::class,'index']);
Route::post('admin/login',[AdminController::class,'login']);
Route::get('logout',[AdminController::class,'logout']);

// Dashboard
Route::get('dashboard',[DashboardController::class,'index']);
Route::get('admin/dashboard',[DashboardController::class,'index']);
Route::get('admin/Dashboard',[DashboardController::class,'index']);

// SubAdmin
Route::get('subadmin',[SubAdminController::class,'index']);
Route::get('admin/subadmin',[SubAdminController::class,'index']);
Route::get('addSubAdmin',[SubAdminController::class,'create']);
Route::post('addSubAdmin',[SubAdminController::class,'store']);
Route::get('deleteSubAdmin/{id}',[SubAdminController::class,'destroy']);
Route::get('admin/SubAdmin/deleteSubAdmin/{id}',[SubAdminController::class,'destroy']);

// Category
Route::get('categories',[CategoryController::class,'index']);
Route::get('addCategory',[CategoryController::class,'create']);
Route::post('addCategory',[CategoryController::class,'store']);
Route::get('editCategory/{id}',[CategoryController::class,'edit']);
Route::post('editCategory/{id}',[CategoryController::class,'update']);
Route::get('deleteCategory/{id}',[CategoryController::class,'destroy']);
Route::get('changeCategoryStatus/{id}',[CategoryController::class,'changeStatus']);
Route::post('getSubCategory',[CategoryController::class,'getAllSubCategory']);

// Breaking News
Route::get('breaking-news',[BreakingNewsController::class,'index']);
Route::get('addBreakingNews',[BreakingNewsController::class,'create']);
Route::post('addBreakingNews',[BreakingNewsController::class,'store']);
Route::get('editBreakingNews/{id}',[BreakingNewsController::class,'edit']);
Route::post('editBreakingNews/{id}',[BreakingNewsController::class,'update']);
Route::get('deleteBreakingNews/{id}',[BreakingNewsController::class,'destroy']);

// News
Route::get('news',[NewsController::class,'index']);
Route::get('addNews',[NewsController::class,'create']);
Route::post('addNews',[NewsController::class,'store']);
Route::get('editNews/{id}',[NewsController::class,'edit']);
Route::post('editNews/{id}',[NewsController::class,'update']);
Route::get('deleteNews/{id}',[NewsController::class,'destroy']);
Route::get('changeNewsStatus/{id}',[NewsController::class,'changeStatus']);

// Slider
Route::get('slider',[SliderController::class,'index']);
Route::get('addSlider',[SliderController::class,'create']);
Route::post('addSlider',[SliderController::class,'store']);

// Point Table
Route::get('point_table',[PointeTableController::class,'index']);
Route::post('addTeam',[PointeTableController::class,'create']);
Route::post('addPoint',[PointeTableController::class,'store']);
Route::post('addSportCategory',[PointeTableController::class,'addCategory']);
Route::post('getSportsName',[PointeTableController::class,'getSportsName']);
Route::post('getAllTeams',[PointeTableController::class,'getAllTeams']);
Route::post('getTeamPoint',[PointeTableController::class,'getTeamPoint']);

// API & Static
Route::get('api/category/{id}',[HomeController::class,'apicategoryByNews']);
Route::get('PrivacyPolicy',[HomeController::class,'PrivacyPolicy']);

Route::get('clearcache',function() {
    Artisan::call('optimize:clear');
    return 'All Clear Cache';
});
