<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminPartner extends Controller
{
    public function UpdatePartner(Request $request)
    {
        $content = $request->all()["content"];
      if (DB::table("single_pages")
      ->where("name", "partner")
      ->update(["content"=> $content]))
      {
          return 1;
      }
      return -1;
    }

    public function getPartner()
    {
        return  DB::table("single_pages")
        ->where("name", "partner")
        ->get()
        ->first()
        ->content;
    }
}