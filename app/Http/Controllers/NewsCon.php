<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NewsCon extends Controller
{
    
    public function index()
    {
        $ni = "all";
        if (isset($_GET['ni']) && $_GET['ni'] != 'all')
        {
            $ni = $_GET['ni'];
            $news = DB::table("news")
            ->join("newscategory","news.newscategoryid","newscategory.id")
            ->select("news.*","newscategory.name as category")
            ->where("newscategoryid", $ni)
            ->orderByRaw("created_at desc")
            ->get();
        }
        else
        {
            $news = DB::table("news")
            ->orderByRaw("created_at desc")
            ->join("newscategory","news.newscategoryid","newscategory.id")
            ->select("news.*","newscategory.name as category")
            ->orderByRaw("created_at desc")
            ->get();
        }

       
        $category = DB::table("newscategory")
        ->get();

        $data = [
            "current" => "news",
            "news" => $news,
            "category"=>$category
        ];
        return view("public.pages.news", $data);
    }
}
