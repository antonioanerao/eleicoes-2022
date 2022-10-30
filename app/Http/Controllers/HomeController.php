<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index() {
        $response = json_decode(Http::get(env('TSE_API')), true);
        $candidatos = $response['cand'];
        $urnasApuradas = $response['pst'];

        $votosBolsonaro = number_format($candidatos[0]['vap']);
        $votosLula = number_format($candidatos[1]['vap']);

        $votosBolsonaro = str_replace(',', '.', $votosBolsonaro);
        $votosLula = str_replace(',', '.', $votosLula);

        return view('welcome',
            compact('candidatos', 'urnasApuradas', 'votosBolsonaro', 'votosLula')
        );
    }
}
