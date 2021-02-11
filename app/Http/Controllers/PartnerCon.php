<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerCon extends Controller
{
    public function index()
    {
        
        $data = [
            "current" => "partner",
            "content" => DB::table("single_pages")->select("content")->where("name", "partner")->get()->first()->content
        ];
        return view("public.pages.partner", $data);
    }
}