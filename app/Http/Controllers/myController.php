<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function index()
    {
        $name = "Sir";
        $age = 48;
    
    $tab = array('nom' => $name, 'age' => $age);
    return view('myview', $tab);
    }
}