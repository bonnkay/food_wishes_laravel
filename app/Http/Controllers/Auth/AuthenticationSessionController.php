<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticationSessionController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function startSession(Request $request)
    {
        //dd($request->get('name'));

        $credentials = $request->validate(
            [
                'email' => ['required', 'string', 'email'],
                'password' => ['required', 'string']
            ]
        );

        //Verify credentials in database
        if (!Auth::attempt($credentials)) {
            // Throw exception send message result verify the credentials in database
            throw ValidationException::withMessages([
                "email" => __('auth.failed')
            ]);
        }
        //Management sessions
        //Session is a file created that contains information about user session
        //This file stands during the time of session in live mode
        $request->session()->regenerate();
        //$user->email = $request->get('email');
        // $user->password = bcrypt($request->get('password'));
        return redirect()->intended()->with('status', 'Sesión iniciada correctamente');
    }

    public function endSession(Request $request)
    {
        //Destroy session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
