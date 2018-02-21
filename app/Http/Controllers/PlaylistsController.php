<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\Playlist;

class PlaylistsController extends Controller
{
    public function index() {
    	// $playlists = DB::table('playlists')->get();
        $playlists = Playlist::all();
    	return view('playlist-list', [
    		'playlists' => $playlists
    	]);
    }

    public function show($playlistID) {
    	// $playlist = DB::table('playlists')
    	// 	->where('PlaylistId', '=', $playlistID)
    	// 	->first();

        $playlist = Playlist::find($playlistID);

    	// $tracks = DB::table('playlist_track')
    	// 	->join('tracks', 'tracks.TrackId', '=', 'playlist_track.TrackId')
    	// 	->where('PlaylistId', '=', $playlistID)
    	// 	->get();
        $tracks = $playlist->Tracks;

    	return view('playlist-details', [
    		'playlist' => $playlist,
    		'tracks' => $tracks
    	]);
    }

    public function create() {
    	return view('create-playlist');
    }

    public function store(Request $request) {
    	$validation = Validator::make([
    		'playlistName' => $request->input('playlist')
    	], [
    		'playlistName' => 'required|min:3'
    	]);


    	if($validation->passes()) {

    		// DB::table('playlists')->insert([
    		// 	'Name' => $request->input('playlist')
    		// ]);
            $playlist = new Playlist();
            $playlist->Name = $request->input('playlist');
            $playlist->save();
            
    		return redirect('/playlists');
    	} else {
    		return redirect('/playlists/new')
    			->withInput()
    			->withErrors($validation);
    	}
    }

    public function showEdit($playlistID) {
        // $playlist = DB::table('playlists')
        //     ->where('PlaylistId', '=', $playlistID)
        //     ->first();

        $playlist = Playlist::find($playlistID);

        return view('edit-playlist', [
            'playlist' => $playlist
        ]);
    }

    public function edit(Request $request) {
        $playlistID = $request->input('hiddenId');

        $validation = Validator::make([
            'playlistName' => $request->input('playlist')
        ], [
            'playlistName' =>'required|min:3'
        ]);

        if($validation->passes()) {
            // DB::table('playlists')
            //     ->where('PlaylistId', '=', $playlistID)
            //     ->update([
            //         'Name' => $request->input('playlist')
            // ]);

            $playlist = Playlist::find($playlistID);
            $playlist->Name = $request->input('playlist');
            $playlist->save();


            return redirect('/playlists');
        } else {
            return redirect('/playlists/'.$playlistID.'/edit')
                ->withInput()
                ->withErrors($validation);
        }
    }

    public function delete($playlistID) {
        // DB::table('playlists')
        //     ->where('PlaylistId', '=', $playlistID)
        //     ->delete();

        $playlist = Playlist::find($playlistID);
        $playlist->forceDelete();

        return redirect('/playlists');
    }
}
