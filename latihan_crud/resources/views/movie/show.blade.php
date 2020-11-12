@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="card" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=925&q=80" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $movie->name}}</h5>
          <p class="card-text">{{ $movie->year_release}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{ $movie->genre}}</li>
          <li class="list-group-item">{{ $movie->rating}}</li>
        </ul>    
      </div>
</div>
@endsection