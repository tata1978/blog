<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()//se usa __invoke cuando queremos que el controlador administre una unica ruta
    {
        return view('home');
    }
}
