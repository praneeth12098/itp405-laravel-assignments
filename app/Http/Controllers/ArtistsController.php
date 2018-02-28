<?php

namespace App\Http\Controllers;
use DB;
use App\Artist;

use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index() {
    	$artists = Artist::get();

    	return view('artists',[
    		'artists' => $artists
    	]);
    }
}
