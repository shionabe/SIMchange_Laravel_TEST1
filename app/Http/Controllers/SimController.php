<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sim;
class SimController extends Controller
{
    //
    public function index ()
    {
      $modeldata = Sim::getmydb();
      // $hello = 'Hello,World!';
      $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];
      return view('sim', compact('modeldata', 'hello_array'));

    }


}
