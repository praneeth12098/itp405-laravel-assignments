<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Setting;

class SettingsController extends Controller
{
    public function index() {
    	$status = Setting::find('maintenance_mode');
    	return view('settings', [
    		'status' => $status
    	]);
    }

    public function update(Request $request) {
    	$settingVal = Setting::find('maintenance_mode')->value;
    	if($settingVal == 0) {
    		DB::table('settings')->where('id', '=', 'maintenance_mode')->update(['value' => 1]);
    		return redirect('/');
    	} else {
    		DB::table('settings')->where('id', '=', 'maintenance_mode')->update(['value' => 0]);
    		return redirect('/');
    	}
    }
}
