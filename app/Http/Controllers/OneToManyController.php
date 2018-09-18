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
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();
        foreach($countries as $country)
        {        
            echo "<b>{$country->name}</b>"; 

            $states = $country->states;

            foreach($states as $state)
            {
                echo "<br> {$state->initials} - {$state->name}";
            }
            echo '<hr>';

        }
    }


    public function manyToOne()    
    {
        $stateName = "Pequim";

        $state = State::where('name', $stateName)->get()->first();
        echo "<b>{$state->name}</b>";

        $country = $state->country;
        echo "<br>País: {$country->name}";
        $country->name;
        
    }
 

    public function oneToManyTwo()
    {
        $keySearch = 'a';

        //$country = Country::where('name', 'Brasil')->get()->first();
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();


        foreach($countries as $country)
        {        
            echo "<b>{$country->name}</b>"; 

            $states = $country->states;

            foreach($states as $state)
            {
                echo "<br> {$state->initials} - {$state->name}:";

                foreach($state->cities as $city)
                {
                    echo "{$city->name} ,";
                }
            }
            echo '<hr>';

        }
    }

    public function oneToManyInsert()
    {
        $dataForm = [
            'name' => 'Bahia',
            'initials' => 'BA',
        ] ;

        $country = Country::find(1);

        $insertState = $country->states()->create($dataForm);

        var_dump($insertState);

    }

    public function oneToManyInsertTwo()
    {
        $dataForm = [
            'name' => 'Bahia',
            'initials' => 'BA',
            'country_id' => '1',
        ];

        $country = Country::find(1);

        $insertState = State::create($dataForm);

        var_dump($insertState);

    }


  

}
