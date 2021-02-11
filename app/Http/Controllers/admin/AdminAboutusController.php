<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminAboutusController extends Controller
{
    public function update(Request $request)
    {
      $content = $request->all()["content"];
      DB::table("single_pages")
      ->where("name", "aboutus")
      ->update(["content"=> $content]);
    }

    public function get()
    {
      return  DB::table("single_pages")
      ->where("name", "aboutus")
      ->get()
      ->first()
      ->content;
    }
}