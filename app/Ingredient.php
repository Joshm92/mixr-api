<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cocktail;

class Ingredient extends Model
{
    public $timestamps = false;
    
    public function cocktails() {
        return $this->belongsToMany(Cocktail::class);
    }
}
