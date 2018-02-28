<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Artist;
use DB;

class AlbumsController extends Controller
{
    public function showDetails($artistID) {
    	$artist = Artist::find($artistID);
        
        // $albums = Album::where('ArtistId', $artist->ArtistId)->get();

        $albums = DB::table('albums')
        			->where('ArtistId', '=', $artist->ArtistId)
        			->get();


    	return view('albums', [
    		'albums' => $albums,
            'artist' => $artist
    	]);
    }
}
