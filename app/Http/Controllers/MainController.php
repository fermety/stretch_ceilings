<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function gallary()
    {
        return view('gallary');
    }

    public function company()
    {
        return view('company');
    }

    public function type()
    {
        return view('type');
    }
}
