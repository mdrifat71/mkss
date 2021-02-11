<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;

class HomeCon extends Controller
{
    public function index()
    {

        $projects = DB::table("projects")
        ->join("sectors", "sectors.id", "projects.sectorid")
        ->select("projects.*", "sectors.name as sector")
        ->orderByRaw("projects.status desc")
        ->offset(0)
        ->limit(3)
        ->get();

        // echo "<pre>";
        // print_r($projects);
        // echo "</pre>";
        $news = DB::table("news")
            ->orderByRaw("created_at desc")
            ->join("newscategory","news.newscategoryid","newscategory.id")
            ->select("news.*","newscategory.name as category")
            ->orderByRaw("created_at desc")
            ->offset(0)
            ->limit(3)
            ->get();
        
        $sectors = DB::table("sectors")->get();
        
        $primary_mobile = DB::table("siteinfo")
        ->where("key","primary-mobile")
        ->get()
        ->first()
        ->content;

        $primary_email = DB::table("siteinfo")
        ->where("key","primary-email")
        ->get()
        ->first()
        ->content;

        
        $meta =[
            "description" => DB::table("siteinfo")->select("content")->where("key", "default_description")->get()->first()->content,
            "keyword" => DB::table("siteinfo")->select("content")->where("key", "default_keyword")->get()->first()->content,
            "robots" =>  DB::table("siteinfo")->select("content")->where("key", "default_robots")->get()->first()->content,
            "title" =>   DB::table("siteinfo")->select("content")->where("key", "default_title")->get()->first()->content,

        ];
      
            
        $data = [
            "current" => "home",
            "projects" => $projects,
            "news" => $news,
            "sectors" => $sectors,
            "primary_mobile" => $primary_mobile,
            "primary_email" => $primary_email,
            "meta" => $meta
        ];
        return view("public.pages.home", $data);
    }

    public function test($id)
    {
        echo $id;
    }
}