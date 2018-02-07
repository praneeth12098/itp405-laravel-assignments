<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlaylistsController extends Controller
{
    public function index() {
    	$playlists = DB::table('playlists')->get();
    	return view('playlist-list', [
    		'playlists' => $playlists
    	]);
    }

    public function show($playlistID) {
    	$playlist = DB::table('playlists')
    		->where('PlaylistId', '=', $playlistID)
    		->first();

    	$tracks = DB::table('playlist_track')
    		->join('tracks', 'tracks.TrackId', '=', 'playlist_track.TrackId')
    		->where('PlaylistId', '=', $playlistID)
    		->get();

    	return view('playlist-details', [
    		'playlist' => $playlist,
    		'tracks' => $tracks
    	]);
    }
}
