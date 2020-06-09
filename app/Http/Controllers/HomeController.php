<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Seance;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$movies = Film::all();
        //$movies = Film::with('genre')->get();
        //return view('home', ['movies' => $movies]);

        $seance = Seance::find(1);
        //$seance = Seance::with('technicien:id_personne,nom,prenom')->first();
        echo "fonctions :";
        foreach ($seance->technicien->fonctions as $fonction) {
            echo $fonction->nom."<br>";
        }

        echo "technicien : ".$seance->technicien->nom."<br>";
        echo "ouvreur : ".$seance->ouvreur->nom."<br>";
        echo "menage : ".$seance->menage->nom;

        
    }
}
