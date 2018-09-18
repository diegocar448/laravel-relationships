<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function companies()
    {
        //colocar o nome que preferir sem o erro de nome padrão do laravel 
        //adicionamos após a virgula o 'company_city e o laravel irá reconhece-lo'
        return $this->belongsToMany(Company::class, 'company_city');
    }
}
