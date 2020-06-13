<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
      public function index()
    {
    	$response = Http::get('https://api.kawalcorona.com/indonesia');
    	$data = $response->json();

    	$prov = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
    	$ind_p = $prov->json();

    	$positif = Http::get('https://api.kawalcorona.com/positif');
    	$world_p = $positif->json();

    	$recovery = Http::get('https://api.kawalcorona.com/sembuh');
    	$world_r = $recovery->json();

    	$death = Http::get('https://api.kawalcorona.com/meninggal');
    	$world_d = $death->json();

    	return view('welcome' , compact('data','world_p','world_r' , 'world_d' , 'ind_p'));

    }
}
