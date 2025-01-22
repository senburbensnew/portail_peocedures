<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComptabiliteController extends Controller
{
    public function pcehDetaille()
    {
        return view('comptabilite.pceh_detaille');
    }

    public function nomenclaturesBudgetaires()
    {
        return view('comptabilite.nomenclatures_budgetaires');
    }

    public function nomenclaturePiecesJustificatives()
    {
        return view('comptabilite.nomenclature_pieces_justificatives');
    }
}
