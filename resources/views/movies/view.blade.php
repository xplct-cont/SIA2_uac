@extends('base')

@section('content')

<h1>{{$movie->title}}</h1>
<div>

    Author: 
    {{$movie->user->name}}<br />
    {{$movie->created_at->format('F d, Y g:i A')}}
</div>
<hr> Movie Genre:
{!! $movie->genre !!}

@endsection