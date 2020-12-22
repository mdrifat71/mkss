<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SingleNewsCon extends Controller
{
    public function index($title)
    {
        $title = str_replace("-"," ", $title);
    
        $news = DB::table("news")
        ->join("newscategory", "newscategory.id", "news.newscategoryid")
        ->select("news.*","newscategory.name as category")
        ->where("news.title", $title)
        ->get()
        ->first();

        if (empty($news))
        {
             return redirect("404");
        }
        else
        {
            $data = [
                "news" => $news
            ];
            return view("public.pages.single-news", $data);
        }
    }
}
