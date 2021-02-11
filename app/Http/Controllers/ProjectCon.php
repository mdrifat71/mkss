<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProjectCon extends Controller
{
    public function index()
    {
         $data = [
            "current" => "project",
            "projects" => [],
            "sectors" => [],
            "overview" => "",
            "isOverview" => false
        ];
        $projects = [];
        $sectors = [];

        $sectors = DB::table("sectors")
        ->get();
        

        $si = "all"; //sector id

        if (!isset($_GET['si']))
        {
            $data["isOverview"] = true;
            $data["overview"] = DB::table("single_pages")->select("content")->where("name", "project_overview")->get()->first()->content;
        }
        elseif (isset($_GET['si']) and $_GET['si'] != "all")
        {
            $si = $_GET['si'];
            $projects = DB::table("projects")
            ->select("projects.title", "projects.from", "projects.to", "projects.image", "projects.status", "sectors.name as sector")
            ->join("sectors", "sectors.id", "projects.sectorid")
            ->where("sectors.id", $si)
            ->get();
           
        }
        
        else
        {

            $projects = DB::table("projects")
            ->select("projects.title", "projects.from", "projects.to", "projects.image", "projects.status", "sectors.name as sector")
            ->join("sectors", "projects.sectorid", "sectors.id")
            ->orderByRaw("projects.status desc, projects.created_at asc")
            ->get();
           
        }

         $data["projects"] = $projects;
         $data["sectors"] = $sectors;
       // return $projects;
        return view("public.pages.project", $data);
    }
}