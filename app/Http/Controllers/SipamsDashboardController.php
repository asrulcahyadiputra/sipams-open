<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SipamsDashboardController extends Controller
{
    public function index(): View
    {
        $data = [
            'title'     => 'SIPAMS Dashboard',
            'modul'     => $this->modul(),
            'submodul'  => $this->sub_modul()
        ];

        // dd($data['modul']['submodul']);

        return view('dashboard', $data);
    }
}
