<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonyolNews extends Controller
{
    public function index()
    {
        $news = [
            [
                'title' => 'Pemotor Ditabrak seekor sapi',
                'summary' => 'Seorang pemotor terekam kamera tertabrak seekor sapi saat berkendara di Jakarta Selatan.',
                'image' => asset('images/news/motor.jpg'),
                'date' => '17 Oktober 2025',
                'category' => 'Viral',
            ],
            [
                'title' => 'Salah Headline',
                'summary' => 'Gagal fokus karena salah memasukan judul headline.',
                'image' => asset('images/news/presiden.jpeg'),
                'date' => '15 Oktober 2025',
                'category' => 'Hiburan',
            ],
            [
                'title' => 'Si Bro ini ngomong apa',
                'summary' => 'uvuvevwe.',
                'image' => asset('images/news/nigga.jpeg'),
                'date' => '14 Oktober 2025',
                'category' => 'Edukasi',
            ],
        ];

        return view('news', compact('news'));
    }
}