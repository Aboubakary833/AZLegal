<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index() {
        return view('admin.pages.auth');
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ],
        [
            'email' => "L'adresse email entrée est incorrect.",
            'required' => "Ce champ obligatoire."
        ]);

        if($validator->failed()) {
            return redirect()->back()->withErrors($validator);
        }

        $credentials = $request->all(['email', 'password']);

        if(!Auth::attempt($credentials)) {
            return redirect()->back()->with('error', "Adresse email ou mot de passe incorrect.");
        }

        $request->session()->regenerate();

        return redirect()->route('admin.home');
    }
}
