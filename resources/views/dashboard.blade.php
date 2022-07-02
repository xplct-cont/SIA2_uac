@extends('base')

@section('content')

<h1>Dashboard</h1>

<p>
    <strong>Welcome {{auth()->user()->name}} </strong>
</p>

@endsection

<style scoped>

h1{
    position:absolute;
    top: 20%;
    left:43%;
}

p{
    position:absolute;
    top: 30%;
    left:43.5%;

}


</style>