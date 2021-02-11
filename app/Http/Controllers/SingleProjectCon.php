<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SingleProjectCon extends Controller
{
    //

    public function index($title)
    {
        $title = str_replace("-"," ",$title);
        
        $project = DB::table("projects")
        ->join("sectors", "sectors.id", "projects.sectorid")
        ->select("projects.*", "sectors.name as sector")
        ->where("projects.title", $title)
        ->get()
        ->first();

        $data = [
            "project" => $project
        ];

        // echo "<pre>";
        // print_r($project);
        // echo "</pre>";

        if (empty($project))
            return redirect("/404");

        
        return view("public.pages.single-project", $data);

    }
}