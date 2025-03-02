<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StarWarsController extends Controller
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('services.swapi.base_url');
    }

    public function index()
    {
        $response = Http::get($this->baseUrl . 'films/');
        $starWars = $response->json()['results'];

        return view('starWars.index', compact('starWars'));
    }

    public function showCharacters(Request $request)
    {
        $id = $request->query('id');
        $response = Http::get($this->baseUrl . "films/{$id}/");
        $starWar = $response->json();

        $characters = [];
        foreach ($starWar['characters'] as $characterUrl) {
            $characterResponse = Http::get($characterUrl);
            $characters[] = $characterResponse->json();
        }

        return view('starWars.characters', compact('starWar', 'characters'));
    }

    public function showVehicle($id)
    {
        $response = Http::get($this->baseUrl . "vehicles/{$id}/");
        $vehicle = $response->json();
        return view('vehicles.show', compact('vehicle'));
    }
}
