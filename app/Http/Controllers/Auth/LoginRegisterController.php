<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginRegisterController extends Controller
{
  public function index()
  {
    // Return the login/register view
    return view('auth.login');
  }

  public function login(Request $request)
  {
    // Validate the request data
    $request->validate([
      'email' => 'required',
      'password' => 'required',
    ]);

    // Find the user by email
    $user = User::where('email', $request->email)->first();

    if (!$user) {
      return redirect()->back();
    } else {
      Auth::login($user);
      return redirect()->route('dashboard');
    }
  }

  public function register(Request $request)
  {
    // Validate the request data
    $request->validate([
      'name' => 'required',
      'email' => 'required|unique:users',
      'password' => 'required|confirmed',
    ]);

    // Create the user
    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password),
    ]);

    // Log the user in
    Auth::login($user);

    // Redirect to the dashboard
    return redirect()->route('dashboard');
  }

  public function logout()
  {
    Auth::logout();

    return redirect('/');
  }
}
