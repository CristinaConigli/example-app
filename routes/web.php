<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cats', function () {
    $pizzas=[
        ['type'=>'hawaiian','base'=>'cheesy crust'],
        ['type'=>'volcano','base'=>'garlic crust'],
        ['type'=>'vegan','base'=>'thin']
    ];
    return view('pizzas', ['pizzas'=>$pizzas]);
    
});
