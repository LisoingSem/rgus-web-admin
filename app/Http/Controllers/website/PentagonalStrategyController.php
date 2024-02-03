<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class PentagonalStrategyController extends Controller
{
    public function index()
    {
        //$language = app()->getLocale();
        //$filename = $language === 'km' ? 'KM-Royal-Government-Pentagonal-Strategy-Phase-I.pdf' : 'EN-Royal-Government-Pentagonal-Strategy-Phase-I.pdf';
        //$data['filePath'] = 'assets/images/documents/' . $filename;

        $data['filePath'] = app()->getLocale() === 'km' ? 'https://pressocm.gov.kh/wp-content/uploads/2023/08/KH-Royal-Government-Pentagonal-Strategy-Phase-I.pdf' : 'https://pressocm.gov.kh/wp-content/uploads/2023/08/ENG-Royal-Government-Pentagonal-Strategy-Phase-I.pdf';
        return view('website::pages.pentagonal-strategy.index', $data);
    }
}
