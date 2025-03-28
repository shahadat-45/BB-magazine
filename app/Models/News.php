<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function division(){
        return $this->belongsTo('App\Models\ShipDivision','division_id');
    }
    public function district(){
        return $this->belongsTo('App\Models\ShipDistrict','district_id');
    }

    public function state(){
        return $this->belongsTo('App\Models\ShipState','state_id');
    }
    public function category(){
        return $this->belongsTo('App\Models\BlogCategory','category_id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
