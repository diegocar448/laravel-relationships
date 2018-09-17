<?php

//ONE TO ONE
$this->get('one-to-one', 'OneToOneController@oneToOne');

$this->get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');

$this->get('one-to-one-insert', 'OneToOneController@oneToOneInsert');


//One To Many
$this->get('one-to-many', 'OneToManyController@oneToMany');


Route::get('/', function () {
    return view('welcome');
});
