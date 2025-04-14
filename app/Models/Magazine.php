<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    protected $guarded = ['id'];
    
    public function division()
    {
        return $this->belongsTo(ShipDivision::class);
    }

    public function district()
    {
        return $this->belongsTo(ShipDistrict::class);
    }

    public function state()
    {
        return $this->belongsTo(ShipState::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(MagazineImage::class, 'magazine_id');
    }
}
