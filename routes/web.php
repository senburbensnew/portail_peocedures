<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\ExecutionController;
use App\Http\Controllers\ComptesController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ComptabiliteController;
use App\Http\Controllers\TextesLegauxController;
use App\Http\Controllers\MatérielController;
use App\Http\Controllers\GeneraliteController;
use App\Http\Controllers\DocumentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('generalites.introduction');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::resource('procedures', ProcedureController::class);

Route::get('/generalites/introduction', [GeneraliteController::class, 'introduction'])->name('generalites.introduction');
Route::get('/generalites/menu', [GeneraliteController::class, 'menu'])->name('generalites.menu');

// Administration et gestion des crédits
Route::prefix('administration')->name('administration.')->group(function () {
    Route::get('/', [AdministrationController::class, 'index'])->name('index');
    Route::get('manuel-procedures', [AdministrationController::class, 'manuelProcedures'])->name('manuel-procedures');
    Route::get('manuel-utilisateur', [AdministrationController::class, 'manuelUtilisateur'])->name('manuel-utilisateur');
});

// Exécution budgétaire
Route::prefix('execution-budgetaire')->name('execution-budgetaire.')->group(function () {
    Route::get('/', [ExecutionController::class, 'index'])->name('index');
    Route::get('manuel-procedures', [ExecutionController::class, 'manuelProcedures'])->name('manuel-procedures');
    Route::get('manuel-utilisateur', [ExecutionController::class, 'manuelUtilisateur'])->name('manuel-utilisateur');
});


// Comptes à payer
Route::prefix('comptes-payer')->name('comptes-payer.')->group(function () {
    // Routes principales
    Route::get('/', [ComptesController::class, 'index'])->name('index');
    Route::get('manuel-procedures', [ComptesController::class, 'manuelProcedures'])->name('manuel-procedures');
    Route::get('manuel-utilisateur', [ComptesController::class, 'manuelUtilisateur'])->name('manuel-utilisateur');
    Route::get('formulaires', [ComptesController::class, 'formulaires'])->name('formulaires');

    // Formulaires Fournisseur national
    Route::get('formulaire/ouverture-compte-national', [ComptesController::class, 'ouvertureCompteNational'])->name('formulaire.ouverture-compte-national');
    Route::get('formulaire/suspension-compte-national', [ComptesController::class, 'suspensionCompteNational'])->name('formulaire.suspension-compte-national');
    Route::get('formulaire/radiation-compte-national', [ComptesController::class, 'radiationCompteNational'])->name('formulaire.radiation-compte-national');

    // Formulaires Fournisseur étranger
    Route::get('formulaire/ouverture-compte-etranger', [ComptesController::class, 'ouvertureCompteEtranger'])->name('formulaire.ouverture-compte-etranger');
    Route::get('formulaire/suspension-compte-etranger', [ComptesController::class, 'suspensionCompteEtranger'])->name('formulaire.suspension-compte-etranger');
    Route::get('formulaire/radiation-compte-etranger', [ComptesController::class, 'radiationCompteEtranger'])->name('formulaire.radiation-compte-etranger');

    // Formulaires Agent de carrière
    Route::get('formulaire/ouverture-compte-carriere', [ComptesController::class, 'ouvertureCompteCarriere'])->name('formulaire.ouverture-compte-carriere');
    Route::get('formulaire/desactivation-compte-carriere', [ComptesController::class, 'desactivationCompteCarriere'])->name('formulaire.desactivation-compte-carriere');

    // Formulaires Agent contractuel
    Route::get('formulaire/ouverture-compte-contractuel', [ComptesController::class, 'ouvertureCompteContractuel'])->name('formulaire.ouverture-compte-contractuel');
    Route::get('formulaire/desactivation-compte-contractuel', [ComptesController::class, 'desactivationCompteContractuel'])->name('formulaire.desactivation-compte-contractuel');

    // Formulaires Autres agents
    Route::get('formulaire/ouverture-compte-autre-agent', [ComptesController::class, 'ouvertureCompteAutreAgent'])->name('formulaire.ouverture-compte-autre-agent');
    Route::get('formulaire/desactivation-compte-autre-agent', [ComptesController::class, 'desactivationCompteAutreAgent'])->name('formulaire.desactivation-compte-autre-agent');
});


// Catalogue
Route::prefix('catalogue')->name('catalogue.')->group(function () {
    Route::get('/', [CatalogueController::class, 'index'])->name('index');
    Route::get('manuel-procedures', [CatalogueController::class, 'manuelProcedures'])->name('manuel-procedures');
    Route::get('manuel-utilisateur', [CatalogueController::class, 'manuelUtilisateur'])->name('manuel-utilisateur');
    Route::get('demande-biens-services', [CatalogueController::class, 'demandeBiensServices'])->name('demande-biens-services');
});

// Comptabilité
Route::prefix('comptabilite')->name('comptabilite.')->group(function () {
    Route::get('/', [ComptabiliteController::class, 'index'])->name('index');
    Route::get('pceh-detaille', [ComptabiliteController::class, 'pcehDetaille'])->name('pceh-detaille');
    Route::get('nomenclatures-budgetaires', [ComptabiliteController::class, 'nomenclaturesBudgetaires'])->name('nomenclatures-budgetaires');
    Route::get('nomenclature-pieces-justificatives', [ComptabiliteController::class, 'nomenclaturePiecesJustificatives'])->name('nomenclature-pieces-justificatives');
});

// Textes légaux et réglementaires
Route::prefix('textes-legaux')->name('textes-legaux.')->group(function () {
    Route::get('loi-organique', [TextesLegauxController::class, 'loiOrganique'])->name('loi-organique');
    Route::get('arrete-plan-comptable', [TextesLegauxController::class, 'arretePlanComptable'])->name('arrete-plan-comptable');
    Route::get('arrete-nomenclatures-budgetaires', [TextesLegauxController::class, 'arreteNomenclatures-budgetaires'])->name('arrete-nomenclatures-budgetaires');
});

// Matériel informatif et pédagogique
Route::prefix('materiel')->name('materiel.')->group(function () {
    Route::get('/', [MatérielController::class, 'index'])->name('index');
});

Route::get('/documents/upload', [DocumentController::class, 'index'])->name('documents.index');
Route::post('/documents/upload', [DocumentController::class, 'upload'])->name('documents.upload');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
