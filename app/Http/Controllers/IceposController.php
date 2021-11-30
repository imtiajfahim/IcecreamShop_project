<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Icepos extends Controller
{
    public function Index()
    {
        return view('index');
    }

}