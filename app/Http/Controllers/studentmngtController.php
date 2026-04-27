<?php

namespace App\Http\Controllers;

use App\Models\User;

class studentmngtController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('student.index', compact('users'));
    }
}
