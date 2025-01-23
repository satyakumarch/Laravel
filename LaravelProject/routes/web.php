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
// Route::get('/{n}',function($n){
//     $result=1;
//  for( $i=1;$i<=$n;$i++){

//         $result *= $i;
//  }
//  return $result;
// });


// Route::get('/data',function(){
    
//     return  ['Niranj','bisha','satya'];
// });

// Route::get('/data1',function(){
//     $data1=['Name'=>'Niraj','Age'=>23,'subject'=>'math','Phone'=>776476547];
//     return $data1['Age'];
    
// });

// //Creata a route that accepts a route parameter as a  number which depicts marks. Consider certain 
// //condition that will print the message "You got --grade and should print in color;

// Route::get('/num/{number}', function($number) {
//     if ($number >= 90) {

//         return "<p style=color:green>You achieve a A grade<p/>";

//     } elseif ($number >= 80 && $number < 90) {
//         return "B grade";

//     } elseif ($number >= 70 && $number < 80) {
//         return "<p style =color:blue>C grade</p>";

//     } elseif ($number >= 60 && $number < 70) {
//         return "<p  style=color:yellow> you can achieve D grade</p>";

//     } else {

//         return "<p style=color:red>You have failed</p>";
//     }
// });

// Route::get('test',function(){
//     return view('test');
// });

// Route::view('satya','satya');

// Route::get('satya',function(){
//     return view::mark('test');
// });

// Route::get('satya',function(){
//     return view('satya')->with('name','Ashish');
// });

// Route::get('satya',function(){
//     return view('satya',['name'=>'manoj']);
// });

Route::get('test',function(){
    return view('test',['name'=>'Ashish','score'=>34]);
});

Route::get('test1',function(){
    return view('test1')->with('name','manoj');
});
