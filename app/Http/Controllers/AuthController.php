<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->filled('remember');

        if(Auth::attempt($credentials, $remember)){
            return  redirect()->intended('/');
        }else{
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();
        
        // will clear out all the data that's stored in the user session, which might include all the authenticated
        // user information, and then it might be any flash data, all input data and more.

        request()->session()->invalidate();

        // And this would regenerate the csrf token for the for this session.
        // So by regenerating this token, we basically make sure that all the forms that were loaded before the
        // user signed out can't be successfully sent.
        Request()->session()->regenerateToken();

        return redirect('/');
    }
}