<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        return view('dashboard', ['titlePage' => 'Super User!']);
    }

    public function keanggotaan()
    {
        return view('keanggotaan');
    }

    public function keuangan()
    {
        return view('keuangan');
    }
}
