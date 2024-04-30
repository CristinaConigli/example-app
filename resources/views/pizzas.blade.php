@extends('layouts.layout')
@section('content')
    <div class="justify-center text-center">
        

        <div  style="text-align: center;" >
            
                <h1 class="title">
                    The best pizza in town
                </h1>
                <br><br><br>
                <img style="width: 200px; height: 200px; margin: 0 auto;" src="/img/pizza.jpg" alt="logo">
                <br><br><br>
               <p>{{$name}}</p> 
               <p>{{$age}}</p> 
        </div>
    </div>
@endsection