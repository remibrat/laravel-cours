
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Séances</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action='{{ route('create_seance') }}' method='post'>
                        @csrf
                        Film : <select name=film>
                            @foreach($films as $film)
                                <option value='{{ $film->id_film }}'>{{ $film->titre }}</option>
                            @endforeach
                        </select>
                        <br>
                        Salle : <select name=salle>
                            @foreach($salles as $salle)
                                <option value='{{ $salle->id_salle }}'>{{ $salle->nom_salle }}</option>
                            @endforeach
                        </select>
                        <br>
                        Personne ouvreur : <select name=ouvreur>
                            @foreach($ouvreurs as $ouvreur)
                                <option value='{{ $ouvreur->id_personne }}'>{{ $ouvreur->nom.' '.$ouvreur->prenom }}</option>
                            @endforeach
                        </select>
                        <br>
                        Personne technicien : <select name=technicien>
                            @foreach($techniciens as $technicien)
                                <option value='{{ $technicien->id_personne }}'>{{ $technicien->nom.' '.$technicien->prenom }}</option>
                            @endforeach
                        </select>
                        <br>
                        Personne ménage : <select name=menage>
                            @foreach($menages as $menage)
                                <option value='{{ $menage->id_personne }}'>{{ $menage->nom.' '.$menage->prenom }}</option>
                            @endforeach
                        </select>
                        <br>
                        Début de la séance : <input type="datetime-local" name="start" value="2020-06-09T19:00">
                        <br>
                        Fin de la séance : <input type="datetime-local" name="end" value="2020-06-09T23:00">
                        <br><br>
                        <input type="submit" value="Créer séance" >
                    </form>
                    <br/><br/>
                    <ul>
                        @foreach ($seances as $seance)
                        Séance {{ $seance->id }}
                        <li>Film : {{ App\Film::find($seance->id_film)->titre }}</li>
                        <li>Salle : {{ App\Salle::find($seance->id_salle)->nom_salle }}</li>
                        <li>Personne ouvreur : {{ App\Personne::find($seance->id_personne_ouvreur)->nom.' '.App\Personne::find($seance->id_personne_ouvreur)->prenom }}</li>
                        <li>Personne technicien : {{ App\Personne::find($seance->id_personne_technicien)->nom.' '.App\Personne::find($seance->id_personne_technicien)->prenom }}</li>
                        <li>Personne menage : {{ App\Personne::find($seance->id_personne_menage)->nom.' '.App\Personne::find($seance->id_personne_menage)->prenom }}</li>                        
                        <li>Début de séance : {{ $seance->debut_seance }}</li>
                        <li>Fin de séance : {{ $seance->fin_seance }}</li>
                        <hr>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
