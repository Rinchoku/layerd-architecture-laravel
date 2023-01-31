<?php

namespace App\Http\Controllers\Demo;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class IndexController extends BaseController
{
    public function index()
    {
        $users = User::all();

        return view('demo.index')->with([
            'users' => $users,
        ]);
    }
}
