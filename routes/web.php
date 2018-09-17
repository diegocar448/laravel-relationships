<?php

//ONE TO ONE
$this->get('one-to-one', 'OneToOneController@oneToOne');

$this->get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');

Route::get('/', function () {
    return view('welcome');
});
