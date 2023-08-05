<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        $client = new Client();
        $response = $client->request('GET','https://newsapi.org/v2/everything?q=tesla&from=2023-07-05&sortBy=publishedAt&apiKey=95342992d8414c5abb5e000e6ed038e2');
        $body = $response->getBody()->getContents();
        $data = json_decode($body, true);
        // return ($data['articles']);
        return view('welcome',['data' => $data]);
    }
}


