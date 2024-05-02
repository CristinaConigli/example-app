<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pizzas', 'PizzaController@index');

// Route::get('/pizzas/{id}', 'PizzaController@show');
Route::get('/pizzas', function () {
    $pizzas=[
        ['type'=>'hawaiian','base'=>'cheesy crust'],
        ['type'=>'volcano','base'=>'garlic crust'],
        ['type'=>'vegan','base'=>'thin']
    ];
    return view('pizzas', ['pizzas'=>$pizzas]);
    
});