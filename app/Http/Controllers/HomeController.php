<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home_index() {
        return view('homepage');
    }
    public function admin_index() {
        return view('homepage');
    }
}
