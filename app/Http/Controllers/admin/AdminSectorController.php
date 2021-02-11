<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sector;

class AdminSectorController extends Controller
{
    public function get()
    {
        return Sector::get();
    }
}