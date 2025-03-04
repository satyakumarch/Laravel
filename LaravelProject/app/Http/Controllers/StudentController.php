<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students = [
        ['id' => 1, 'name' => 'Aman', 'email' => 'aman@example.com', 'image' => 'images/hello.jpg'],
        ['id' => 2, 'name' => 'abc', 'email' => 'abc@example.com', 'image' => 'images/Ao.png'],
        ['id' => 3, 'name' => 'xyz', 'email' => 'xyz@example.com', 'image' => 'images/lpu.jpg
        '],
    ];

    public function index()
    {
        $students = $this->students;
        return view('student_list', compact('students'));
    }

    public function show($id)
    {
        $student = collect($this->students)->firstWhere('id', $id);
        return view('student_details', compact('student'));
    }
}