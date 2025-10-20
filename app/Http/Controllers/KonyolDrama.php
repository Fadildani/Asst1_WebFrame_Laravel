<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonyolDrama extends Controller
{
    public function index()
    {
        $films = [
            [
                'title' => 'Drama Konyol',
                'description' => 'Kisah absurd penuh tawa dan air mata.',
                'poster' => asset('images/konyol/genji.jpeg'),
                'duration' => '1h 45m',
                'genre' => 'Drama Komedi',
            ],
            [
                'title' => 'Petualangan Gila',
                'description' => 'Perjalanan tak terduga melintasi dunia rimba.',
                'poster' => asset('images/konyol/bolang.jpeg'),
                'duration' => '2h 10m',
                'genre' => 'Petualang',
            ],
            [
                'title' => 'Komedi Cinta',
                'description' => 'Podcast Romansa tak biasa di dunia yang penuh kejutan.',
                'poster' => asset('images/konyol/komedi.png'),
                'duration' => '1h 30m',
                'genre' => 'Romantis Komedi',
            ],
            [
                'title' => 'Konyol Horror',
                'description' => 'Kisah horor yang absurd di rumah tua penuh misteri dan tawa.',
                'poster' => asset('images/konyol/horror.jpeg'),
                'duration' => '1h 20m',
                'genre' => 'Horor Komedi',
            ],
            [
                'title' => 'Awas Ada Sule',
                'description' => 'Kisah lucu kang sule komedian legendaris.',
                'poster' => asset('images/konyol/sule.jpeg'),
                'duration' => '1h 50m',
                'genre' => 'Aksi Komedi',
            ],
            [
                'title' => 'Si Juki',
                'description' => 'Adaptasi dari komik Si Juki.',
                'poster' => asset('images/konyol/juki.jpg'),
                'duration' => '1h 10m',
                'genre' => 'Komedi',
            ],
        ];

        return view('konyol', compact('films'));
    }
}