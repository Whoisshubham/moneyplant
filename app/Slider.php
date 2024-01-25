<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table="sliders";
    protected $fillable = ['title','description','video'];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
