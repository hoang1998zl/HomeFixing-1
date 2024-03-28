<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {
        $users = ModelsUser::where('status', 1)->get();

        return view('auth.pages.accountlist', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $user = new ModelsUser();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->status = 1;
        $user->save();
        return redirect()->route('account.list');
    }

    public function update(Request $request, $id)
    {
        $user = ModelsUser::find($id);
        if ($request->name != null) {
            $user->name = $request->name;
        }
        if ($request->email != null) {
            $user->email = $request->email;
        }
        if ($request->password != null) {
            $user->password = $request->password;
        }
        $user->save();
        return redirect()->route('account.list');
    }
    public function destroy($id)
    {
        $user = ModelsUser::find($id);
        $user->status = 0;
        $user->save();
        return redirect()->route('account.list');
    }
}
