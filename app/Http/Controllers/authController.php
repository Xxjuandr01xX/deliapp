<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    //
    public function login()
    {
        return view('auth');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'name' => 'Name or password is incorrect.',
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}