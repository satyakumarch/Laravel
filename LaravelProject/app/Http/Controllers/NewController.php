<?php
namespace App\Http\Request;
use Illuminate \Http\Request;

// class NewController extends Controllers
// {
// // function myFunctio($name){
// //     return $name;
// // }

// function myFunc(){
//     return to_route('/',['name'=>'Aman']);
// }
// }
class StudentController extends Controller
{
    public function index()
    {
        $students = ['Aman', 'abc', 'xyz'];
        return view('student_list', compact('students'));
    }

    public function show($name)
    {
        return view('student_details', compact('name'));
    }
}