<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class DemoController extends Controller
{
    public function s3(Request $request)
    {
        $text = Storage::disk('s3')->get('file.txt');

        return view('demo.s3')->with(['text' => $text,]);
    }
}
