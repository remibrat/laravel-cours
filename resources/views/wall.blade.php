@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">The Wall</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    salut les pd

                    <form action='{{ route('write') }}' method='post'>
                        @csrf
                        <input type="text" name='content' placeholder="Tapez nom">
                        <input type="submit" value="Ecrire sur le mur" >
                    </form>
                    <br/><br/>
                    <ul>
                        @foreach ($posts as $post)
                        <li>
                            {{ $post->content }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
