<?php

namespace App\Http\Controllers\Demo;

use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        return view('demo.index');
    }
}
