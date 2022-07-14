<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegistrationController extends Controller {
	public function create() {
		return view('register.create');
	}
	
	public function store() {
		request()->validate([
			'name' => ['required', 'max:255'],
			'username' => ['required', 'min:3', 'max:255'],
			'email' => ['required', 'email', 'max:255'],
			'password' => ['required', 'min:8', 'max:255']
			// 'password' => 'required|min:8|max:255'
		
		]);
		// return request()->all();
		// nothing else will be executed unless validation passes...
		
		User::create();
	}
}
