@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')

<h1>
    Movies
</h1>

<div class="container">
    <div class="row">
            <div class="col">
                <div class="card my-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">Original Title: {{ $movie->original_title }}</p>
                        <p class="card-text">Date: {{ $movie->date }}</p>
                        <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection