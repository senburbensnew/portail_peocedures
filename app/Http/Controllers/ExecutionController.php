<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExecutionController extends Controller
{
    public function manuelProcedures()
    {
        return view('execution_budgetaire.manuel_procedures');
    }

    public function manuelUtilisateur()
    {
        return view('execution_budgetaire.manuel_utilisateur');
    }
}
