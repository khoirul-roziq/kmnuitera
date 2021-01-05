<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
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
