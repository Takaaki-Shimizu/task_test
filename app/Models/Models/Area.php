<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
   public function shops() {
    return $this->hasMany('App\Models\Models\Shop');
   }
}
