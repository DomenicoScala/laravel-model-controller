@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')

<h1>
    Movies
</h1>

<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-12 col-sm-3">
                <div class="card my-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">Original Title: {{ $movie->original_title }}</p>
                        <a href="{{ route('movies.show', ['id' => $movie->id]) }}" class="btn btn-primary">Go to film</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection