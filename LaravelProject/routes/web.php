<?php

use Illuminate\Support\Facades\Route;

// Route::get('wel', function () {
//     return "welcome to larval php";
// });

// Route::get('data ', function(){
// $name = "satya";
// return $name;
// });

// Route::get('data', function () {
//     return view('satya');
// });


// Route::get('/student',function(){
//     $name="lovely professional university";
//     $age=2022;
//     $address="punjab, india";
//     return "<h1 style=color:red >The name is $name</h1>
//     <h1 style =color:blue>The age is $age</h1>
//     <h1 style=color:green>The address is $address</h1>";
// });

// Route::get('student1/{name}/{age?}',function($name,$age){
//     return "The name of the student is $name and the age is $age";
// });

//Array
// Route::get('/data',function(){
//     $data= ['Niranj','bisha','satya'];
//     return $data;
// });


Route::get('add/{a}/{b}',function($a,$b){
    $add =$a+$b;
    $sub=$a-$b;
    $mul=$a*$b;
    $div=$a/$b;
    return [$add,$sub,$mul,$div];
});

//For loop
Route::get('/{n}',function($n){
    $result=1;
 for( $i=1;$i<=$n;$i++){

        $result *= $i;
 }
 return $result;
});


Route::get('/data',function(){
    
    return  ['Niranj','bisha','satya'];
});

Route::get('/data1',function(){
    $data1=['Name'=>'Niraj','Age'=>23,'subject'=>'math','Phone'=>776476547];
    return $data1['Age'];
    
});