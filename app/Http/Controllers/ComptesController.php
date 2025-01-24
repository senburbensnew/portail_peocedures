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

    public function ouvertureCompteNational()
    {
        return view('comptes_payer.formulaires.fournisseur_national.ouverture_compte');
    }

    public function suspensionCompteNational()
    {
        return view('comptes_payer.formulaires.fournisseur_national.suspension_compte');
    }

    public function radiationCompteNational()
    {
        return view('comptes_payer.formulaires.fournisseur_national.radiation_compte');
    }

    public function ouvertureCompteEtranger()
    {
        return view('comptes_payer.formulaires.fournisseur_etranger.ouverture_compte');
    }

    public function suspensionCompteEtranger()
    {
        return view('comptes_payer.formulaires.fournisseur_etranger.suspension_compte');
    }

    public function radiationCompteEtranger()
    {
        return view('comptes_payer.formulaires.fournisseur_etranger.radiation_compte');
    }

    public function ouvertureCompteCarriere()
    {
        return view('comptes_payer.formulaires.agent_carriere.ouverture_compte');
    }

    public function desactivationCompteCarriere()
    {
        return view('comptes_payer.formulaires.agent_carriere.desactivation_compte');
    }

    public function ouvertureCompteContractuel()
    {
        return view('comptes_payer.formulaires.agent_contractuel.ouverture_compte');
    }

    public function desactivationCompteContractuel()
    {
        return view('comptes_payer.formulaires.agent_contractuel.desactivation_compte');
    }

    public function ouvertureCompteAutreAgent()
    {
        return view('comptes_payer.formulaires.autre_agent.ouverture_compte');
    }

    public function desactivationCompteAutreAgent()
    {
        return view('comptes_payer.formulaires.autre_agent.desactivation_compte');
    }
}
