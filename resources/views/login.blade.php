@extends('base')

@section('content')

<div class="card shadow-lg p-2 mb-3 bg-info rounded fixed-center" style=" margin-top: 30px; width: 50%; position:relative; left: 25%;">


    <div class="card shadow-lg p-2 mb-3 bg-white rounded" style="width: 100%;">
<div class="row mt-5">
    <div class="col-md-4 offset-md-4">
     <h1 style="font-size: 30px;"> User Login</h1>
       {!! Form::open(['url'=>'/login','method'=>'post']) !!}
   <div class="mb-3">
       {!! Form::label("email","Email") !!}
       {!! Form::email("email",null, ['class'=>'form-control']) !!}
   </div>
   <div class="mb-3">
       {!! Form::label("password","Password") !!}
       {!! Form::password("password",['class'=>'form-control']) !!}
   </div>
   
   <div class="mb-3">
      <button class="btn btn-primary" submit="submit"> LOGIN</button>
   </div>

{!! Form::close() !!}
    </div>
</div>
</div>
</div>


@endsection

