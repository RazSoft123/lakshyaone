<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if($user === null)
            return view('login');
        else
            return redirect()->intended('dashboard');
    }

    // Create a new user authentication
    public function create()
    {
        //
    }

    // Store new user authentication
    public function store(Request $request): RedirectResponse
    {
        $credential = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credential not match in our records'
        ])->onlyInput('email');
    }

    // // Show authenticated user
    // public function show(string $id)
    // {
    //     //
    // }


    // public function edit(string $id)
    // {
    //     //
    // }


    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // Sign out authenticated user
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
