<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hello_world;

class HelloWorldController extends Controller
{
    public function index()
    {
        $text = Hello_world::all();
        return view('helloWorld', ['text' => $text]);
    }
}
