<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class InfoCoronaController extends Controller
{
    public function index()
    {
        // $client = new Client();

        // $response = $client->request('GET',
        //     // 'https://data.covid19.go.id/public/api/skor.json', 
        //     'https://data.covid19.go.id/public/api/prov.json', 
        //     ['verify' => false]

        // );

        $response = Http::get('https://data.covid19.go.id/public/api/prov.json');
        $data = $response->json();

        // if ($response->toPsrResponse()->getStatusCode() == 200) {
        //      $data = json_decode($response); //bisa  di dd() untuk mengetahui struktur arraynya
        //  } else {
        //      $data = []; //atau bisa tampilkan pesan jika data tidak ada
        //  }


        // $statusCode = $response->getStatusCode();
        // $body = $response->getBody();

        // $data = json_decode($body, true);

        return view ('data', ['data' => $data]);
    }
}