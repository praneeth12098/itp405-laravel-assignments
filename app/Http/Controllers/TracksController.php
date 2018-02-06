<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TracksController extends Controller
{
     public function showDetails(Request $request) {
     	$genreName = $request->query('genre');
    	$tracks = DB::table('tracks')
    		->select('tracks.Name as trackName', 'albums.Title as albumTitle', 'artists.Name as artistName', 'tracks.UnitPrice as trackPrice')
    		->join('genres', 'tracks.GenreId', '=', 'genres.GenreId')
    		->join('albums', 'tracks.AlbumId', '=', 'albums.AlbumId')
    		->join('artists', 'artists.ArtistId', '=', 'albums.ArtistId')
    		->where('genres.Name', 'LIKE', $genreName)
    		->get();

    	return view('tracks', [
    		'tracks' => $tracks,
    	]);
    }
}
