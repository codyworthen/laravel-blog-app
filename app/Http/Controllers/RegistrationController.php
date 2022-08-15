<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegistrationController extends Controller
{
    
    public function create()
    {
        return view('register.create');
    }
    
    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:255']
        ]);
        // 'username' => 'required|min:3|max:255|unique:users,username', // alternative syntax
        // return request()->all(); // dumps attributes as json
        
        // nothing else will be executed unless validation passes...
        
        $user = User::create(
            $attributes
        ); //User.setPasswordAttribute() is automatically called when password attribute is set
        
        Auth::login($user); // log the user in after creating them
        
        // with() flashes data to the session just like session()->flash('success', 'Your account has been successfully created.')
        // pick this up in layout.blade.php with session()->has('success')  <--- USE KEY
        return redirect('/')->with('success', 'Your account has been successfully created.');
    }
    
}
