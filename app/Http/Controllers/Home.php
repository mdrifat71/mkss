<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $data = ["current"=>"home"];
        return view("public.pages.home", $data);
    }

    public function test($id)
    {
        echo $id;
    }
}
