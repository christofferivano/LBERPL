<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Movie;
use Auth;

class MovieController extends Controller
{

    public function displayUserMovie()
    {
        $user_id = Auth::user()->id;
        $userMovies = Movie::where('user_id', $user_id)->get();
        $status = 0;
        if (count($userMovies) > 0) {
            $status = 1;
        }
        return view('movie.index',[
            'status' => $status,
            'movies' => $userMovies,
        ]);
    }
    public function userDashboard()
    {
        return view('home');
    }

    public function displayCreateMoviePage()
    {
        return view('movie.create');
    }

    public function createMovie(MovieRequest $request)
    {
        $data = $request->validated();
        $newMovie = Movie::create($data);
        return redirect()->route('movie.index')->with('status', 'Movie successfully inserted');
    }

    public function displayEditMoviePage($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.edit',[
            'movie' => $movie,
        ]);
    }

    public function editMovie(MovieRequest $request, $id)
    {
        $data = $request->validated();
        $editedMovie = Movie::findOrFail($id)->update($data);
        return redirect()->route('movie.index')->with('status', 'Movie successfully edited');
    }

    public function displayDeleteMoviePage($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.delete',[
            'movie' => $movie,
        ]);
    }

    public function deleteMovie($id)
    {
        // $data = $request->validated();
        $deletedMovie = Movie::findOrFail($id)->delete();
        return redirect()->route('movie.index')->with('status', 'Movie successfully deleted');
    }

    public function showMovie($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.show', [
            'movie' => $movie,
        ]);
    }
}

