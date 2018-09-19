<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Company;


class ManyToManyController extends Controller
{
    public function manyToMany()
    {
        $city = City::where('name', 'São Paulo')->get()->first();
        echo "<b>{$city->name}</b><br>";

        $companies = $city->companies;
        foreach($companies as $company)
        {
            echo "<b>{$company->name}</b><br>";
        }
    }

    public function manyToManyInverse()
    {
        $company = Company::where('name', 'Empresa Orion')->get()->first();
        echo "<b>{$company->name}</b><br>";

        $cities = $company->cities;
        foreach($cities as $city)
        {
            echo "<b>{$city->name}</b><br>";
        }
        
    }
}
