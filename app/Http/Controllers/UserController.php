<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        // Show the create form
        return view('users.create');
    }

    public function edit($id)
    {
        // Fetch user by ID and show the edit form
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function destroy($id)
    {
        // Find the user by ID and delete it
        $user = User::find($id);
        $user->delete();

        // Redirect to the show user page 
        return redirect()->route('show')->with('success', 'User deleted successfully');
    }

    public function showUsers() {
        $users = User::all();
        return view('users.show', compact('users'));
    }
}
