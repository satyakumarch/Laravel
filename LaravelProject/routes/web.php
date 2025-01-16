<?php

use Illuminate\Support\Facades\Route;

Route::get('wel', function () {
    return "welcome to larval php";
});

Route::get('data ', function(){
$name = "satya";
return $name;
});

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

Route::get('student1/{name}/{age?}',function($name,$age){
    return "The name of the student is $name and the age is $age";
});

