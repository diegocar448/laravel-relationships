<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Comment;

class PolymorphicController extends Controller
{
    public function polimorphic()
    {
        
    }

    public function polymorphicInsert()
    {
        /* $city = City::where('name', 'Guarulhos')->get()->first();
        echo $city->name;

        

        $comment = $city->comments()->create([
            'description' => "New Comment {$city->name} ".date('YmdHis'),
        ]);

        var_dump($comment); */



        /* $state = State::where('name', 'Tocantins')->get()->first();
        echo $state->name;

        

        $comment = $state->comments()->create([
            'description' => "New Comment {$state->name} ".date('YmdHis'),
        ]);

        var_dump($comment); */

        $country = Country::find(1);
        echo $country->name;

        

        $comment = $country->comments()->create([
            'description' => "New Comment {$country->name} ".date('YmdHis'),
        ]);

        var_dump($comment);
    }
}
