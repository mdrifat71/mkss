<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AboutCon extends Controller
{
    
    public function index()
    {
        $info = DB::table("aboutus")
        ->orderByRaw("priority asc")
        ->get();

        $data = [
            "current" => "about",
            "info" => $info
        ];
        return view("public.pages.about", $data);
    }
}
