<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
        return view('admin.index');
    }
    
    function menu() {
        return view('admin.menu');
    }
}
