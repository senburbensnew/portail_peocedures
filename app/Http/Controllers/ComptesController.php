<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComptesController extends Controller
{
    public function index()
    {
        return view('comptes_payer.index');
    }
}
