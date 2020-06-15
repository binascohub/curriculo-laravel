<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ProjectsController extends Controller
{
    //
    public function index()
    {
        $client = new Client(); // Guzzlehttp Client
        $result = $client->get('https://api.github.com/users/binascohub/repos');
        var_dump($result);
    }
}
