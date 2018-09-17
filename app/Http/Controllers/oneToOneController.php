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
}
