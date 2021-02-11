<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoverningBody extends Model
{
    protected $fillable = [
        "name",
        "email",
        "description",
        "image",
        "status",
        "priority"
    ];

    protected $table = "governingbody";
}