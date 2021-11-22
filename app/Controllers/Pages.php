<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'ASMA | Landing Page'
        ];
        return view('pages/landing_page', $data);
    }
}
