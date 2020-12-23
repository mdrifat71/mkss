<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GovernanceCon extends Controller
{
    public function index()
    {
        $author = DB::table("governingbody")
        ->orderByRaw("priority asc")
        ->get();


        $data = [
            "current" => "governance",
            "author" => $author
        ];

        return view("public.pages.governance", $data);
    }
}
