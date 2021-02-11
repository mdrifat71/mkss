<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(["adminAuth"])->group((function(){
    Route::get("/projects", "admin\AdminProjectController@get");
    Route::post("/project/insert", "admin\AdminProjectController@insert");
    Route::get("/sectors/get", "admin\AdminSectorController@get");
    Route::get("/projects/get/list", "admin\AdminProjectController@getList");
    Route::get("projects/get/{id}", "admin\AdminProjectController@singleProject");
    Route::delete("/projects/delete/{id}", "admin\AdminProjectController@deleteProject");
    Route::post("/project/update/{id}", "admin\AdminProjectController@update");
    Route::post("/project/overview/update", "admin\AdminProjectController@updateProjectOverview");
    Route::get("/project/overview/get", "admin\AdminProjectController@getProjectOverview");

    //dev partner
    Route::post("/partner/update", "admin\AdminPartner@updatePartner");
    Route::get("/partner/get", "admin\AdminPartner@getPartner");
    
    //employer / governance
    Route::post("/employer/insert", "admin\AdminGovernanceController@insert");
    Route::post("/employer/update/{id}", "admin\AdminGovernanceController@update");
    Route::get("/employer/getlist", "admin\AdminGovernanceController@getList");
    Route::get("/employer/get/{id}", "admin\AdminGovernanceController@get");
    Route::delete("/employer/delete/{id}", "admin\AdminGovernanceController@delete");
    
    //about us
    Route::post("/aboutus/update", "admin\AdminAboutusController@update");
    Route::get("/aboutus/get", "admin\AdminAboutusController@get");
    //News

    Route::get("/category/get", "admin\AdminNewsCategoryController@get");
    Route::post("/news/insert", "admin\AdminNewsController@insert");
    Route::get("/news/get/list", "admin\AdminNewsController@getList");
    Route::get("/news/get/{id}", "admin\AdminNewsController@singleNews");
    Route::delete("/news/delete/{id}","admin\AdminNewsController@deleteNews");
    Route::post("/news/update/{id}", "admin\AdminNewsController@update");

}));

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});