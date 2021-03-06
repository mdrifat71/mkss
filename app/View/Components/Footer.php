<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $primary_mobile;
    public $primary_email;
    public $primary_location;

    public function __construct()
    {
       
        $this->primary_email  = DB::table("siteinfo")
        ->where("key","primary-email")
        ->get()
        ->first()
        ->content;

        $this->primary_mobile= DB::table("siteinfo")
        ->where("key","primary-mobile")
        ->get()
        ->first()
        ->content;

        $this->primary_location  = DB::table("siteinfo")
        ->where("key","primary-location")
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
        return view('public.components.footer');
    }
}
