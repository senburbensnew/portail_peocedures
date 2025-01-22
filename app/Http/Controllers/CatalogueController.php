<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogueController extends Controller
{

    public function manuelProcedures()
    {
        return view('catalogue.manuel_procedures');
    }

    public function manuelUtilisateur()
    {
        return view('catalogue.manuel_utilisateur');
    }

    public function demandeBiensServices()
    {
        return view('catalogue.demande_biens_services');
    }
}
