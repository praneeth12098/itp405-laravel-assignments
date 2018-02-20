<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Genre;

class GenresController extends Controller
{
     public function index() {
    	// $genres = DB::table('genres')
    	// 	->get();
    	// dd($invoices);
    	$genres = Genre::get();
    	return view ('genres', [
    		'genres' => $genres
    	]);
    }
}