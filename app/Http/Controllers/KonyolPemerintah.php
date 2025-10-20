<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonyolPemerintah extends Controller
{
    public function index()
    {
        $programs = [
            [
                'title' => 'Bantuan UMKM 2025',
                'description' => 'Subsidi modal usaha untuk pelaku UMKM di seluruh Indonesia.',
                'image' => asset('images/pemerintah/umkm.jpg'),
                'category' => 'Ekonomi',
                'date' => '17 Oktober 2025',
            ],
            [
                'title' => 'Smart City Jakarta',
                'description' => 'Transformasi digital untuk layanan publik yang lebih cepat dan transparan.',
                'image' => asset('images/pemerintah/city.jpg'),
                'category' => 'Teknologi',
                'date' => '15 Oktober 2025',
            ],
            [
                'title' => 'Literasi Digital Nasional',
                'description' => 'Kampanye edukasi digital untuk pelajar dan masyarakat umum.',
                'image' => asset('images/pemerintah/literasi.jpg'),
                'category' => 'Edukasi',
                'date' => '14 Oktober 2025',
            ],
        ];

        return view('pemerintah', compact('programs'));
    }
}