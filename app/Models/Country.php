<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\State;
use App\Models\City;

class Country extends Model
{
    protected $fillable = ['name'];

    public function location()
    {
        return $this->hasOne(Location::class);        
    }

    public function states()
    {
        //return $this->hasMany(State::class, 'country_id', 'id');
        return $this->hasMany(State::class);
    }

    public function cities()
    {
        return $this->hasManyThrough(City::class, State::class);
    }
}
 