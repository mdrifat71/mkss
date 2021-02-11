<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $description;
    public $sector;
    public $from;
    public$to;
    public $status;
    public $image;
    public $url;
    public function __construct($title, $sector, $from, $to, $status, $image, $url)
    {
        $this->title = $title;
        $this->sector = $sector;
        $this->from = $from;
        $this->to = $to;
        $this->status = $status;
        $this->image = $image;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('public.components.project-item');
    }
}