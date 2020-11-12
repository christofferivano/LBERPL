@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('movie.editput', ['id' => $movie -> id])}}" method="post">
        @method('PUT')
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <div class="form-group">
            <label for="name">Movie Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $movie->name }}">
        </div>
        <div class="form-group">
            <label for="year_release">Year Release</label>
            <input type="text" class="form-control" id="year_release" name="year_release" value="{{ $movie->year_release }}">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ $movie->genre }}">
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" class="form-control" id="rating" name="rating" value="{{ $movie->rating }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection