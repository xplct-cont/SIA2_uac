@extends('base')

@section('content')

<h1>Recent Movies</h1>

<div class="d-flex justify-content-between">
    @foreach($recentMovies as $movie)

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