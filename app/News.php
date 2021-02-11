<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    protected $fillable = [
        "title",
        "imagecaption",
        "image",
        "description",
        "newscategoryid",
        "meta_description",
        "meta_keyword",
        "meta_robots"

    ];
}