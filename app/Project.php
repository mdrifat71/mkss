<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        "title",
        "from",
        "to",
        "description",
        "image",
        "status",
        "area",
        "sectorid",
        "meta_description",
        "meta_keyword",
        "meta_robots"
    ];
}