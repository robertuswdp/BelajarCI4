<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }


    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jl. simpang',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'jl. kepuh',
                    'kota' => 'malang'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }

}
