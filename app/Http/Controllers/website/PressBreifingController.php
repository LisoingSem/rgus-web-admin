<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PressBreifingController extends Controller
{
    public function index()
    {
        return view('website::pages.press-brefing.index');
    }
}
