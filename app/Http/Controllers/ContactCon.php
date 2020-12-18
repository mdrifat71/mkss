<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactCon extends Controller
{
    public function index()
    {
        $data = [
            "current" => "contact"
        ];

        return view("public.pages.contact",$data);
    }
}
