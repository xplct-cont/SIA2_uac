@extends('base')

@section('content')

<div class="float-end mt-2">
    <a href="{{url('/movies/create')}}" class="btn btn-primary">
        Create New Movie
    </a>
</div>

<h1>My Movies</h1>
<hr>

<div class="d-flex justify-content-between">
    @foreach($myMovies as $movie)

    <div class="card align-self-stretched" style="width: 31%">
        <div class="card-body">
            <div class="card-title">
                <h4>{{$movie->title}}</h4>
                <p>
                    Movie Genre: 
                    {{$movie->genre}}  <br>

                   Author: 
                    {{$movie->user->name}}
                </p>
            </div>
        </div>
        <div class="card-footer bg-info">
            <a href="{{url('/movies/edit/' . $movie->id)}}" class="btn btn-secondary btn-sm">
                Edit
            </a>
        </div>
    </div>

    @endforeach
</div>

@endsection