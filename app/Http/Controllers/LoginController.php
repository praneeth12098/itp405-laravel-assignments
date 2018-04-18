<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;

class LoginController extends Controller
{
    public function index() {
    	return view('login');
    }

    public function redirectToTwitter() {
        return Socialite::driver('twitter')->redirect();
    }

    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function handleTwitterCallback() {
        $twitterUser = Socialite::driver('twitter')->user();

        $user = User::where('email', '=', $twitterUser->getEmail())->first();

        if (!$user) {
            $user = new User();
            $user->name = $twitterUser->getName();
            $user->email = $twitterUser->getEmail();
        }

        $user->twitter_token = $twitterUser->token;
        $user->twitter_token_secret = $twitterUser->tokenSecret;

        $user->save();

        Auth::login($user);
        return redirect('/profile');
    }

    public function handleGoogleCallback() {
        $googleUser = Socialite::driver('google')->user();

        $user = User::where('email', '=', $googleUser->getEmail())->first();

        if (!$user) {
            $user = new User();
            $user->name = $googleUser->getName();
            $user->email = $googleUser->getEmail();
        }

        $user->google_token = $googleUser->token;
        $user->google_refresh_token = $googleUser->refreshToken;
        $user->save();

        Auth::login($user);
        return redirect('/profile');
    }

    public function login() {
    	$loginWasSuccessful = Auth::attempt([
    		'email' => request('email'),
    		'password' => request('password')
    	]);

    	if($loginWasSuccessful) {
    		return redirect('/profile');
    	} else {
    		return redirect('/login');
    	}
    }

    public function logout() {
    	Auth::logout();
    	return redirect('/login');
    }
}
