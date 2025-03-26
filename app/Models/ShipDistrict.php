<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShipDistrict extends Model
{
    protected $guarded = [];


    // Division table relationship
     public function division(){
         return $this->belongsTo(ShipDivision::class,'division_id','id');
     }
}
