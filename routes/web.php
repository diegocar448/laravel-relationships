<?php

//ONE TO ONE
$this->get('one-to-one', 'OneToOneController@oneToOne');

Route::get('/', function () {
    return view('welcome');
});
