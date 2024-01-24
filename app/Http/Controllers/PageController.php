<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

// $trains = Train::all();
class PageController extends Controller
{    
    public function index(){
        $trains = Train::all();
        // dd($trains);
        return view('home', compact("trains"));
    }  
}