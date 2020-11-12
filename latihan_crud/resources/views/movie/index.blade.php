@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if ($status)
        @foreach ($movies as $movie)
            <div class="d-flex">
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$movie->year_release}}</h6>
                        <p>{{$movie->genre}}</p>
                        <p>{{$movie->rating}}</p>
                        <a href="{{route('movie.show', ['id'=> $movie->id])}}" class="card-link">See Movie</a>
                        <a href="{{route('movie.edit', ['id'=> $movie->id])}}" class="card-link">Update Movie</a>
                        <a href="{{route('movie.delete', ['id'=> $movie->id])}}" class="card-link">Delete Movie</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        
    @endif
@endsection