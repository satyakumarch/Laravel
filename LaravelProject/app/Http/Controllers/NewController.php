<?php
namespace App\Http\Request;
use Illuminate \Http\Request;

class NewController extends Controllers
{
function myFunctio($name){
    return $name;
}
}