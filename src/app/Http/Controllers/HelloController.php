<?php
namespace App\Http\Controllers;

class HelloController extends Controller
{
  public function hello()
  {
    $hello = "Hello, Laravel!";
    return view('hello', ['hello' => $hello]);
  }
}
