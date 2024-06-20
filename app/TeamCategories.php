<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamCategories extends Model
{
    use HasFactory;

    public function teamList(){
      return  $this->hasMany(Team::class,'categorie_id','id');
    }
}
