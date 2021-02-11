<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
class TopNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $mobile;
    public $email;
    public function __construct()
    {
        $this->mobile = DB::table("siteinfo")
        ->where("key","primary-mobile")
        ->get()
        ->first()
        ->content;

        $this->email  = DB::table("siteinfo")
        ->where("key","primary-email")
        ->get()
        ->first()
        ->content;
         
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('public.components.top-nav');
    }
}