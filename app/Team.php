<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function teamCategorie()
    {
        return $this->hasOne(TeamCategories::class, 'id', 'categorie_id');
    }
}
