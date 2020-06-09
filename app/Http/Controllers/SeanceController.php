<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Employe;
use App\Salle;
use App\Seance;
use App\Personne;

class SeanceController extends Controller
{
    
    public function index(){
        //$seances = Seance::with(['film', 'salle'])->get();
        $seances = Seance::all();
        $films = Film::all();
        $salles = Salle::all();
        $ouvreurs = Personne::ouvreurs();
        $techniciens = Personne::techniciens();
        $menages = Personne::menages();

        return view('seance', [
            'seances' => $seances,
            'films' => $films,
            'salles' => $salles,
            'ouvreurs' => $ouvreurs,
            'techniciens' => $techniciens,
            'menages' => $menages
        ]);
    }
    public function create(Request $request){
        $seance = new Seance;

        $seance->id_film = $request->film;
        $seance->id_salle = $request->salle;
        $seance->id_personne_ouvreur = $request->ouvreur;
        $seance->id_personne_menage = $request->menage;
        $seance->id_personne_technicien = $request->technicien;
        $seance->debut_seance = $request->start;
        $seance->fin_seance = $request->end;

        $seance->save();

        return redirect('seance');
    }
}
