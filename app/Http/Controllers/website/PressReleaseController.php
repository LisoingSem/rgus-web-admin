<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PressReleaseController extends Controller
{
    public function index()
    {
        return view('website::pages.press-release.index');
    }
}
