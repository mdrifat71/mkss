<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotFound extends Controller
{
    public function index()
    {
        
        return view("public.pages.404");
    }
}
