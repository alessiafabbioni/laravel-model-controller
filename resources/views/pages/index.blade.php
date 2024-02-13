@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Movies</h1>
    @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $movie -> title }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie -> original_title }}</h6>
                <p class="card-text">{{ $movie -> nationality }}</p>
                <a href="#" class="card-link">{{ $movie -> date }}</a>
                <a href="#" class="card-link">{{ $movie -> vote }}</a>
            </div>
        </div>
        
    @endforeach
    

@endsection
