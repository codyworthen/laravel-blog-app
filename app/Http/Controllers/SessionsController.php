<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller {
	
	public function destroy() {
		$user = auth()->user()->name;
		Auth::logout();
		return redirect('/')->with('success', $user . ' has been successfully logged out.');
	}
	
}
