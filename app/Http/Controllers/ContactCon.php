<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;
use Illuminate\Support\Facades\DB;
class ContactCon extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has("msgSent"))
            $sentStatus = $request->session()->get("msgSent");
        else
            $sentStatus = -1;

        $primary_mobile = DB::table("siteinfo")
        ->where("key","primary-mobile")
        ->get()
        ->first()
        ->content;

        $primary_email = DB::table("siteinfo")
        ->where("key","primary-email")
        ->get()
        ->first()
        ->content;
        $data = [
            "current" => "contact",
            "sentStatus"=> $sentStatus,
            "primary_email" => $primary_email,
            "primary_mobile" => $primary_mobile,
        ];
        
        return view("public.pages.contact",$data);
    }

    public function sendUserMail()
    {
        
        if (isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['email']) && isset($_POST['message']))
        {
            $message = [
                "name" => $_POST['name'],
                "subject"=> $_POST['subject'],
                "email" => $_POST['email'],
                "message"=> $_POST['message']
            ];
            if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['email']) || empty($_POST['message']))
            {
                 return  redirect("/contact")->with("msgSent", 2);
            }
         Mail::to("mkss.b.rahman1990@gmail.com")->send(new UserMail($message));
           return  redirect("/contact")->with("msgSent", 1);
        }
    }
}