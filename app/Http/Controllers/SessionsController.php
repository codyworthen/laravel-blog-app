<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller {
	
	public function create() {
		return view('sessions.create');
	}
	
	public function store() {
		$attributes = request()->validate([
			'email' => ['required'],
			'password' => ['required']
		]);
		
		if (!auth()->attempt($attributes)) {
			return back()
				->withInput()
				->withErrors(['password' => 'Invalid email or password']);
		}
		
		session()->regenerate();
		$name = auth()->user()->name;
		
		return redirect('/')->with('success', $name . ' has been successfully logged in.');
	}
	
	public function destroy() {
		$name = auth()->user()->name;
		Auth::logout();
		return redirect('/')->with('success', $name . ' has been successfully logged out.');
	}
	
}
