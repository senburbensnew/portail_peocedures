<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogueController extends Controller
{

    public function manuelProcedures()
    {
        return view('administration.manuel_procedures');
    }

    public function manuelUtilisateur()
    {
        return view('administration.manuel_utilisateur');
    }

    public function demandeBiensServices()
    {
        return view('catalogue.demande_biens_services');
    }
}
