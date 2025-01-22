<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function manuelProcedures()
    {
        return view('administration.manuel_procedures');
    }

    public function manuelUtilisateur()
    {
        return view('administration.manuel_utilisateur');
    }
}
