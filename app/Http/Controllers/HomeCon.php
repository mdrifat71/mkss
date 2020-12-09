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
        ->get();

        // echo "<pre>";
        // print_r($projects);
        // echo "</pre>";
        $news = DB::table("news")
            ->orderByRaw("created_at desc")
            ->join("newscategory","news.newscategoryid","newscategory.id")
            ->select("news.*","newscategory.name as category")
            ->orderByRaw("created_at desc")
            ->get();

        $data = [
            "current" => "home",
            "projects" => $projects,
            "news" => $news
        ];
        return view("public.pages.home", $data);
    }

    public function test($id)
    {
        echo $id;
    }
}
