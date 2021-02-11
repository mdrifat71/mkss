<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get("user/insert","Admin\UserController@insert");

Route::get('/', "HomeCon@index");
Route::get('/project', "ProjectCon@index");
Route::get('/news', 'NewsCon@index');
Route::get("/about-us","AboutCon@index");

Route::get("/governing-body","GovernanceCon@index");
Route::get("project/{title}", "SingleProjectCon@index");
// Route::get("/mailtest", function(){
//     return view("mail.usermail");
// });
Route::get("/partner", "PartnerCon@index");
Route::get("/404", "NotFound@index");

//mail group
Route::group(['middleware' => ['web']], function () {
    Route::get("/contact","ContactCon@index");
    Route::post("/send-user-mail", "ContactCon@sendUserMail");
});

Route::get("/{title}", "SingleNewsCon@index");