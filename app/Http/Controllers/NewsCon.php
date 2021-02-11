<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NewsCon extends Controller
{
    
    public function index()
    {
        $offset = 0;
        $limit = 10;
        $page = 1;
        if (isset($_GET['p']))
        {
            $page = $_GET['p'];
            $offset = ($page - 1) * $limit;
        }
        $ni = "all";
        if (isset($_GET['ni']) && $_GET['ni'] != 'all')
        {
            $ni = $_GET['ni'];
            $news = DB::table("news")
            ->join("newscategory","news.newscategoryid","newscategory.id")
            ->select("news.*","newscategory.name as category")
            ->where("newscategoryid", $ni)
            ->orderByRaw("created_at desc")
            ->offset($offset)
            ->limit($limit)
            ->get();

            $total_news = DB::table("news")
            ->where("newscategoryid", $ni)
            ->count();
        }
        else
        {
            $news = DB::table("news")
            ->orderByRaw("created_at desc")
            ->join("newscategory","news.newscategoryid","newscategory.id")
            ->select("news.*","newscategory.name as category")
            ->orderByRaw("created_at desc")
            ->offset($offset)
            ->limit($limit)
            ->get();

            $total_news  = DB::table("news")
            ->count();

        }

        $total_page = ceil($total_news/$limit);
        
        
       
        $category = DB::table("newscategory")
        ->get();

        $data = [
            "current" => "news",
            "news" => $news,
            "category"=>$category,
            "total_page" =>$total_page,
            "news_id" => $ni,
            "page" => $page
        ];
        return view("public.pages.news", $data);
    }
}