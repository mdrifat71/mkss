<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutCon extends Controller
{
    
    public function index()
    {
        $data = [
            "current" => "about"
        ];
        return view("public.pages.about", $data);
    }
}
