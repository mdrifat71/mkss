<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NewsItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    //title of news
    public $title; 

    //description of news
    public $description;

    //category of news
    public $category;

    //image name of news
    public $image;


    //url for specific news
    public $url;


    public $date;

    public function __construct($title, $category, $image, $date ="")
    {
        $this->title = $title;
        $this->category = $category;
        $this->image = $image;
        $this->date = $date;
        $this->url = str_replace(" ", "-", $title);
       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('public.components.news-item');
    }
}