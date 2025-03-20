<?php

// use Illuminate\Support\Facades\Route;


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


// Route::get('add/{a}/{b}',function($a,$b){
//     $add =$a+$b;
//     $sub=$a-$b;
//     $mul=$a*$b;
//     $div=$a/$b;
//     return [$add,$sub,$mul,$div];
// });

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

// Route::get('test',function(){
//     return view('test',['name'=>'Ashish','score'=>34]);
// });

// Route::get('test1',function(){
//     return view('test1')->with('name','manoj')->with('score','54');
// });

///creata a route that accept two parameter as empname and empsalary an this data  is
// share the data with the view.The view must print two variable $empname and $empsalary whose
// value will be fetched dynamically from the route parameter in the route in web.php 

//first way
// Route::get('test1/{empname}/{empsalary}',function($empname,$empsalary){
//     return view('test1',['empname'=>$empname,'empsalary'=>$empsalary]);
// });

//2nd way
// Route::get('test1/{empname}/{empsalary}',function($empname,$empsalary){
//     return view('test1')->with('empname',$empname)->with('empsalary',$empsalary);
// });

//3rd way
// Route::get('test1/{empname}/{empsalary}/{empaddress}',function($empname,$empsalary,$empaddress){
//     return view ('test1',compact('empname','empsalary','empaddress'));
// });

// Route::get('/name',function($name){
//     $name=['mohan','rohan','arjun','karana','krishna'];

//     for( $i=0;$i<=$name;$i++){
//         if($i=$name["$i"]){
//         echo " the name is $name";
//         }else{
//             echo  "not data is present";
//         }
//     }
// });
// Route::get('stdents/',function(){
//     $student=[
//         'mohan',
//         'rohan',
//         'sita',
//         'karan',
//         'arjun'

//     ];
//     foreach($student as $student){
//         if($name==$student){
//             $message=true;
//             break;
//         }
//     }
//     return view('student',['student',=>$student,'$message'=>$message,'$name',=>$name])
    
    
// });

/////////////////////////////////////////////////////////////
// Route::get('students/{name}', function ($name) {
//     $students = [
//         'mohan',
//         'rohan',
//         'sita',
//         'karan',
//         'arjun'
//     ];

//     $message = false;
//     foreach ($students as $student) {
//         if ($name == $student) {
//             $message = true;
//             break;
//         }
//     }

//     return view('student', [
//         'students' => $students,
//         'message' => $message,
//         'name' => $name
//     ]);
// });




///using where condtion'
// Route::get('/{mob}', function ($mob) {
//     return view("new", ["mob" => $mob]);
// })->where('mob', '[0-9]+');


// Route::get('add/{a}/{b}',function($a,$b){
//     $add =$a+$b;
//     return [$add];
// });

// Route::get('/',function(){
//     return view('paramter')
// })


use App\Http\Controllers\NewController;
// use Illuminate\Support\Facades\Route;

// Route::get('/NewController',[NewController::class,'myFunction']);
//  Route::get('/',function(){
//     return view('$name');
//  });



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/multiplication', function () {
    return view('multiplication');
});

Route::post('/multiplication', function (Request $request) {
    $num = intval($request->input('number')); // Get the input and convert it to an integer
    return view('multiplication', compact('num'));
});




use App\Http\Controllers\StudentController;

Route::prefix('student')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('/{id}', [StudentController::class, 'show']);
});
// Route::view('newurl','urlpage');
// Route::view('forever','prevurl');

// Route::view('newurl/a/b/c/d/e/f','urlpage')->name('nu');
// Route


Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index'); // List View
    Route::get('/{id}', [ProductController::class, 'show'])->name('products.show'); // Single Product View
});


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
