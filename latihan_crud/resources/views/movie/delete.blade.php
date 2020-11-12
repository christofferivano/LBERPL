@extends('layouts.app')

@section('content')
    <form action="{{ route('movie.delete', ['id' => $movie -> id])}}" method="post">
        @csrf
        @method('DELETE')
        <!-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> -->
        <p>Are you sure wanna delete this movie {{ $movie->name }}</p>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection