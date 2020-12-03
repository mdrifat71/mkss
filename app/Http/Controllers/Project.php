<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Project extends Controller
{
    public function index()
    {
        $data = [
            "current" => "project"
        ];
        return view("public.pages.project", $data);
    }
}
