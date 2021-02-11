<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
   public function insert()
   {
       $data = [
           "name" => "Rifat",
           "email"=>"rifatsarker71@gmail.com",
           "password"=>bcrypt("mksspassword"),
       ];
       if(User::create($data))
       {
           return "success";
       }
       else
       {
           return "0";
       }
   }
}