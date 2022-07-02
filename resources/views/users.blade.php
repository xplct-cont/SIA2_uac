@extends('base')

@section('content')

<h1>Hello {{auth()->user()->name}}</h1>





@endsection


<style scoped>

    h1{
        position:absolute;
        top: 20%;
        left:37%;
    }
    
 
    
    </style>