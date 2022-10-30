<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index() {
        $response = json_decode(Http::get(env('TSE_API')), true);
        $candidatos = $response['cand'];
        $urnasApuradas = $response['pst'];

        return view('welcome', compact('candidatos', 'urnasApuradas'));
    }
}
