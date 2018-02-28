<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Album;
use Validator;
use App\Review;

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

    public function create(Request $request) {
    	$route = \Route::current();


    	$albumID = $route->parameter('id');

    	$album = DB::table('albums')
    			->where('AlbumId', '=', $albumID)
    			->first();

    	return view('create-review', [
    		'album' => $album
    	]);
    }

    public function store(Request $request) {
    	$albumID = $request->input('hiddenId');

    	$validation = Validator::make([
    		'reviewTitle' => $request->input('reviewTitle'),
    		'review' => $request->input('review')
    	], [
    		'reviewTitle' => 'required',
    		'review' => 'required|min:10'
    	]);

    	if($validation->passes()) {
    		$review = new Review();
    		$review->title = $request->input('reviewTitle');
    		$review->body = $request->input('review');
    		$review->album_id = $albumID;
    		$review->save();

    		return redirect('/albums/'.$albumID.'/reviews');
    	} else {
    		return redirect('/albums/'.$albumID.'/reviews/new')
    			->withInput()
    			->withErrors($validation);
    	}
    }
}