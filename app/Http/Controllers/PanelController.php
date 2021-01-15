<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PanelController extends Controller
{
    public function index()
    {
        return view('index');
    }



    public function keuangan()
    {
        return view('keuangan');
    }
}
