@extends('layouts.app') <!-- Assuming 'app' is your main layout -->

@section('title', 'Généralités - Introduction')

@section('content')
    <!-- Page Heading -->
    <header class="bg-white shadow mb-8">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-gray-800">Généralités - Introduction</h1>
        </div>
    </header>

    <!-- Page Content -->
    <section class="max-w-7xl mx-auto p-6 space-y-6 bg-white shadow-lg rounded-lg">
        <p class="text-lg text-gray-700 leading-relaxed">
            Bienvenue sur la page d'introduction des généralités du portail. Cette section fournit une vue d'ensemble des
            principales procédures administratives et des ressources disponibles pour la gestion des crédits, l'exécution
            budgétaire, et plus encore. Vous trouverez ici des informations clés pour naviguer dans le système et accéder
            aux manuels et formulaires nécessaires.
        </p>

        <div class="space-y-4">
            <h2 class="text-2xl font-semibold text-gray-800 border-b pb-2">Objectifs du portail</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                Ce portail est conçu pour centraliser l'information et faciliter l'accès aux documents et procédures
                nécessaires
                à la gestion des crédits et des finances publiques. Il offre une interface simple et intuitive pour que les
                utilisateurs puissent trouver rapidement ce dont ils ont besoin.
            </p>
        </div>

        <div class="space-y-4">
            <h3 class="text-xl font-semibold text-gray-800 border-b pb-2">Navigation</h3>
            <p class="text-lg text-gray-700 leading-relaxed">
                Utilisez la barre latérale pour naviguer entre les différentes sections, notamment l'administration,
                l'exécution
                budgétaire, les comptes à payer, et bien plus encore. Chaque section contient des manuels détaillés et des
                outils pour effectuer des demandes et gérer les procédures.
            </p>
        </div>
    </section>
@endsection
