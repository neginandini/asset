<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset_images extends Model
{
    use HasFactory;
   public function assets(){
       return $this->belongsTo(Asset::class);
   }
}
