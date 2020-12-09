<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProjectCon extends Controller
{
    public function index()
    {
        $sectors = DB::table("sectors")
        ->get();
        
        $si = "all";
        if (isset($_GET['si']) and $_GET['si'] != "all")
        {
            $si = $_GET['si'];
            $projects = DB::table("projects")
            ->join("sectors", "sectors.id", "projects.sectorid")
            ->where("sectors.id", $si)
            ->get();
        }
        else
        {

            $projects = DB::table("projects")
            ->join("sectors", "sectors.id", "projects.sectorid")
            ->orderByRaw("projects.status desc")
            ->get();
        }
        $data = [
            "current" => "project",
            "projects" => $projects,
            "sectors" => $sectors
        ];
        return view("public.pages.project", $data);
    }
}
