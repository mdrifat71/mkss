<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    protected $table = "aboutus";
    protected $primary_key = "heading";
    public $incrementing = false;
    protected $keyType = 'string';
}
