<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Obat;
class HomeController extends Controller
{
    public function index() {
        $obats = Obat::with('kategoris')->get();
        
        return view('welcome',['obats'=> $obats]);
    }
}
