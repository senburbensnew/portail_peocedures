<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComptesController extends Controller
{
    public function manuelProcedures()
    {
        return view('comptes_payer.manuel_procedures');
    }

    public function manuelUtilisateur()
    {
        return view('comptes_payer.manuel_utilisateur');
    }
}
