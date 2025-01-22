<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextesLegauxController extends Controller
{
    public function loiOrganique()
    {
        return view('textes_legaux.loi_organique');
    }

    public function arretePlanComptable()
    {
        return view('textes_legaux.arrete_plan_comptable');
    }

    public function arreteNomenclaturesBudgetaires()
    {
        return view('textes_legaux.arrete_nomenclatures_budgetaires');
    }
}
