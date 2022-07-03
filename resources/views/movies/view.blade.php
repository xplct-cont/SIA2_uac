@extends('base')

@section('content')

<h1>{{$movie->title}}</h1>
<div>
    {{$movie->user->name}}, {{$movie->user->email}}<br />
    {{$movie->created_at->format('F d, Y g:i A')}}
</div>
<hr>
{!! $movie->content !!}

@endsection