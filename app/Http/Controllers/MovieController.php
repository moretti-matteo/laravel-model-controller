<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        
        if(count($movies) > 0){
            return view("welcome",compact('movies'));
        }else return view("notfound");
    }
}
