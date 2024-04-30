<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas=[
            ['type'=>'hawaiian','base'=>'cheesy crust'],
            ['type'=>'volcano','base'=>'garlic crust'],
            ['type'=>'vegan','base'=>'thin']
        ];
       
        return view(
                    'pizzas', 
                    ['pizzas'=>$pizzas,
                    'name' => request('name'), //attributo che va nell'url
                    'age'=> request('age')] 
                    );
        
    }
    public function show($id){
        return view(
                    'details', 
                    ['id'=>$id] 
                    );
    }
}
