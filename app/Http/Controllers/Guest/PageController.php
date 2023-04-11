<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    //Homepage
    public function homepage() {
        $movies = Movie::all(); //prendo i film
        //Dati
        $data = [
            "movies" => $movies //film
        ];
        return view("welcome", $data); //restituisco la vista
    }
}
