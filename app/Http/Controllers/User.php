<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {
        return view('user');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function edit()
    {
        return view('user');
    }
    public function destroy()
    {
        return view('user');
    }
}
