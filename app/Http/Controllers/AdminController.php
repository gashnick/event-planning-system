<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Your logic for the dashboard page goes here
        return view('admin.index');
    }
}
