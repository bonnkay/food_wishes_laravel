<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
        //dd($request->get('name'));
    
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255', 'min:8'],
                'email' => ['required', 'string', 'email', 'max:255', 'min:10', 'unique:users'],
                'password' => ['required', 'confirmed', Password::default()]
    
            ]
        );
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return redirect()->route('login');
    }
}
