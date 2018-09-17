<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class oneToOneController extends Controller
{
    public function oneToOne()
    {
        //$country = Country::find(1);
        $country = Country::where('name', 'brasil')->get()->first();

        echo $country->name;

        $location = $country->location()->get()->first();
        echo "<hr>Latitude: {$location->latitude}<br>";
        echo "<hr>Longitude: {$location->longitude}<br>";
    }

    public function oneToOneInverse()
    {
        $latitude = 456;
        $longitude = 654;

        $location = Location::where('latitude', $latitude)
                    ->where('longitude', $longitude)
                    ->get()
                    ->first();

        $country = $location->country()->get()->first();

        echo $country->name;
        
    }


    public function oneToOneInsert()
    {
        $dataForm = [
            'name' => 'Conchichina',
            'latitude' => '444',
            'longitude' => '888 ',
        ];

        $country = Country::create($dataForm);

        /* $location = new Location;
        $location->latitude = $dataForm['latitude'];
        $location->longitude = $dataForm['longitude'];
        $location->country_id = $country->id;
        $saveLocation = $location->save(); */

        $location = $country->location()->create($dataForm);    
        var_dump($location);
      
    }
}
