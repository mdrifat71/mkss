<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GovernanceCon extends Controller
{
    public function index()
    {
        $data = [
            "current" => "governance"
        ];

        return view("public.pages.governance", $data);
    }
}
