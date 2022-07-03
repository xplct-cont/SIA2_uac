@extends('base')

@section('content')

<div class="row mt-3">
    <div class="col-md-6">
        <h1>Edit Movie</h1>
        <hr>
        {!! Form::model($movie, ['url'=>'/movies/' . $movie->id,'method'=>'put']) !!}

        <div class="mb-3">
            {!! Form::label("title", "Title") !!}
            {!! Form::text("title", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("genre", "Genre") !!}
            {!! Form::text("genre", null, ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">
                Update Movie
            </button>
        </div>

        {!! Form::close() !!}
    </div>
</div>

@endsection