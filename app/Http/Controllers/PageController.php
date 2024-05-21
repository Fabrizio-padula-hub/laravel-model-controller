<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();

        

        $data = [
            'movie' => $movies,
        ];
        
        

        return view('home', $data);
    }
}
