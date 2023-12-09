<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // UserController.php

public function create()
{
    // Show the create form
    return view('users.create');
}

public function store(Request $request)
{
    // Validate and store the new user

    // Example validation (you may need to customize based on your requirements)
    $request ->validate([
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email|unique:customer_details',
        'password' => 'required'
     ]);

    // Create a new user
    User::create([
        'First_name' => $request->input('firstName'),
        'Last_name' => $request->input('lastName'),
        'email' => $request->input('email'),
        'password' => $request->input('password'),
        // Add other fields as needed
    ]);

    // Redirect to the route that displays the list of users
    return redirect()->route('show')->with('success', 'User created successfully');
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
