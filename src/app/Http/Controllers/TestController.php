<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $users = User::get();

        return view('test')->with([
            'users' => $users,
        ]);
    }
}
