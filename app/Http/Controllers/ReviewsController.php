<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Album;

class ReviewsController extends Controller
{
    public function index($albumID) {
    	$album = DB::table('albums')
    			->where('AlbumId', '=', $albumID)
    			->first();

    	$reviews = DB::table('reviews')
    			->where('album_id', '=', $album->AlbumId)
    			->get();


    	return view('reviews', [
    		'album' => $album,
    		'reviews' => $reviews
    	]);
    }
}
