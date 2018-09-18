<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class OneToManyController extends Controller
{
    public function oneToMany()
    {
        $keySearch = 'a';

        //$country = Country::where('name', 'Brasil')->get()->first();
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->get();
        foreach($countries as $country)
        {        
            echo "<b>{$country->name}</b>"; 

            $states = $country->states()->get();

            foreach($states as $state)
            {
                echo "<br> {$state->initials} - {$state->name}";
            }
            echo '<hr>';

        }
    }
}
