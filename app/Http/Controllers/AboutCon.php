<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AboutCon extends Controller
{
    
    public function index()
    {

        $content = DB::table("single_pages")
        ->where("name", "aboutus")
        ->get()
        ->first()
        ->content;

        $data = [
            "current" => "about",
            "content" => $content,
            "description" =>  DB::table("siteinfo")->select("content")->where("key", "default_description")->get()->first()->content,
        ];
        return view("public.pages.about", $data);
    }
}