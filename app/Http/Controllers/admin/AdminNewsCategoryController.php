<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NewsCategory;
class AdminNewsCategoryController extends Controller
{
    public function get()
    {
        return NewsCategory::get();
    }
}