<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{


    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email', $request->name)->first();


        if (auth()->attempt($credentials)) {

            return redirect()->route('dashboard');
        } else {
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
