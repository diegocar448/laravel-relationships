<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function cities()
    {
        //colocar o nome que preferir sem o erro de nome padrão do laravel 
        //adicionamos após a virgula o 'company_city e o laravel irá reconhece-lo'
        return $this->belongsToMany(City::class, 'company_city');
    }
}
