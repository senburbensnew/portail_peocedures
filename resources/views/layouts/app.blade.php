<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portail des procédures') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased h-screen overflow-hidden">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside class="bg-gray-100 w-64 h-screen border-r border-gray-200 p-4 overflow-y-auto">
            <div class="w-full flex items-center justify-center p-2">
                <img src="{{ asset('images/setting-logo-1-M13oPLiYoM.png') }}" alt="Logo" class="w-20 h-20">
            </div>
            <nav class="mt-10">
                <ul class="space-y-4">
                    <!-- Généralités -->
                    <li>
                        <a href="{{ route('generalites.introduction') }}"
                            class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 font-medium">
                            Généralités - Introduction
                        </a>
                    </li>
                    <!-- Administration et gestion des crédits -->
                    <li>
                        <button class="w-full text-left text-black-600 focus:outline-none font-medium"
                            id="administration-accordion"
                            onclick="toggleAccordion('administration-accordion-content', this)">
                            <span id="administration-sign">+</span> Administration et gestion des crédits
                        </button>
                        <ul id="administration-accordion-content" class="hidden pl-4 mt-2 space-y-2">
                            <!-- Manuel de procédures -->
                            <li>
                                <a href="{{ route('administration.manuel-procedures') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Manuel de procédures
                                </a>
                            </li>
                            <!-- Manuel de l'utilisateur -->
                            <li>
                                <a href="{{ route('administration.manuel-utilisateur') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Manuel de l’utilisateur
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Exécution budgétaire -->
                    <li>
                        <button class="w-full text-left text-black-600 focus:outline-none font-medium"
                            id="execution-budgetaire-accordion"
                            onclick="toggleAccordion('execution-budgetaire-accordion-content', this)">
                            <span id="execution-budgetaire-sign">+</span> Exécution budgétaire
                        </button>
                        <ul id="execution-budgetaire-accordion-content" class="hidden pl-4 mt-2 space-y-2">
                            <!-- Manuel de procédures -->
                            <li>
                                <a href="{{ route('execution-budgetaire.manuel-procedures') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Manuel de procédures
                                </a>
                            </li>
                            <!-- Manuel de l'utilisateur -->
                            <li>
                                <a href="{{ route('execution-budgetaire.manuel-utilisateur') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Manuel de l’utilisateur
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Comptes à payer (Accordéon) -->
                    <li>
                        <button class="w-full text-left text-black-600 focus:outline-none font-medium"
                            id="comptes-payer-accordion"
                            onclick="toggleAccordion('comptes-payer-accordion-content', this)">
                            <span id="comptes-payer-sign">+</span> Comptes à payer
                        </button>
                        <ul id="comptes-payer-accordion-content" class="hidden pl-4 mt-2 space-y-2">
                            <!-- Manuel de procédures -->
                            <li>
                                <a href="{{ route('comptes-payer.manuel-procedures') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Manuel de procédures
                                </a>
                            </li>
                            <!-- Manuel de l'utilisateur -->
                            <li>
                                <a href="{{ route('comptes-payer.manuel-utilisateur') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Manuel de l’utilisateur
                                </a>
                            </li>
                            @auth
                                @if (auth()->user()->hasRole('admin'))
                                    <!-- Formulaires -->
                                    <li>
                                        <button class="w-full text-left text-black-600  focus:outline-none font-medium"
                                            id="formulaires-accordion"
                                            onclick="toggleAccordion('formulaires-accordion-content', this)">
                                            <span id="formulaires-sign">+</span> Formulaires
                                        </button>
                                        <ul id="formulaires-accordion-content" class="hidden pl-4 mt-2 space-y-2">
                                            <!-- Fournisseur national -->
                                            <li>
                                                <button class="w-full text-left text-black-600 focus:outline-none"
                                                    id="fournisseur-national-accordion"
                                                    onclick="toggleAccordion('fournisseur-national-accordion-content', this)">
                                                    <span id="fournisseur-national-sign">+</span> Fournisseur national
                                                </button>
                                                <ul id="fournisseur-national-accordion-content"
                                                    class="hidden pl-6 mt-2 space-y-2">
                                                    <li><a href="{{ route('comptes-payer.formulaire.ouverture-compte-national') }}"
                                                            class="block text-blue-600 hover:text-blue-800">Ouverture de
                                                            compte</a></li>
                                                    <li><a href="{{ route('comptes-payer.formulaire.suspension-compte-national') }}"
                                                            class="block text-blue-600 hover:text-blue-800">Suspension de
                                                            compte</a></li>
                                                    <li><a href="{{ route('comptes-payer.formulaire.radiation-compte-national') }}"
                                                            class="block text-blue-600 hover:text-blue-800">Radiation de
                                                            compte</a></li>
                                                </ul>
                                            </li>
                                            <!-- Fournisseur étranger -->
                                            <li>
                                                <button class="w-full text-left text-black-600 focus:outline-none"
                                                    id="fournisseur-etranger-accordion"
                                                    onclick="toggleAccordion('fournisseur-etranger-accordion-content', this)">
                                                    <span id="fournisseur-etranger-sign">+</span> Fournisseur étranger
                                                </button>
                                                <ul id="fournisseur-etranger-accordion-content"
                                                    class="hidden pl-6 mt-2 space-y-2">
                                                    <li><a href="{{ route('comptes-payer.formulaire.ouverture-compte-etranger') }}"
                                                            class="block text-blue-600 hover:text-blue-800">Ouverture de
                                                            compte</a></li>
                                                    <li><a href="{{ route('comptes-payer.formulaire.suspension-compte-etranger') }}"
                                                            class="block text-blue-600 hover:text-blue-800">Suspension de
                                                            compte</a></li>
                                                    <li><a href="{{ route('comptes-payer.formulaire.radiation-compte-etranger') }}"
                                                            class="block text-blue-600 hover:text-blue-800">Radiation de
                                                            compte</a></li>
                                                </ul>
                                            </li>
                                            <!-- Agent de carrière -->
                                            <li>
                                                <button class="w-full text-left text-black-600 focus:outline-none"
                                                    id="agent-carriere-accordion"
                                                    onclick="toggleAccordion('agent-carriere-accordion-content', this)">
                                                    <span id="agent-carriere-sign">+</span> Agent de carrière
                                                </button>
                                                <ul id="agent-carriere-accordion-content"
                                                    class="hidden pl-6 mt-2 space-y-2">
                                                    <li><a href="{{ route('comptes-payer.formulaire.ouverture-compte-carriere') }}"
                                                            class="block text-blue-600 hover:text-blue-800">Ouverture de
                                                            compte</a></li>
                                                    <li><a href="{{ route('comptes-payer.formulaire.desactivation-compte-carriere') }}"
                                                            class="block text-blue-600 hover:text-blue-800">Désactivation de
                                                            compte</a></li>
                                                </ul>
                                            </li>
                                            <!-- Agent contractuel -->
                                            <li>
                                                <button class="w-full text-left text-black-600 focus:outline-none"
                                                    id="agent-contractuel-accordion"
                                                    onclick="toggleAccordion('agent-contractuel-accordion-content', this)">
                                                    <span id="agent-contractuel-sign">+</span> Agent contractuel
                                                </button>
                                                <ul id="agent-contractuel-accordion-content"
                                                    class="hidden pl-6 mt-2 space-y-2">
                                                    <li><a href="{{ route('comptes-payer.formulaire.ouverture-compte-contractuel') }}"
                                                            class="block text-blue-600 hover:text-blue-800">Ouverture de
                                                            compte</a></li>
                                                    <li><a href="{{ route('comptes-payer.formulaire.desactivation-compte-contractuel') }}"
                                                            class="block text-blue-600 hover:text-blue-800">Désactivation
                                                            de
                                                            compte</a></li>
                                                </ul>
                                            </li>
                                            <!-- Autres agents -->
                                            <li>
                                                <button
                                                    class="w-full text-left text-black-600 focus:outline-none focus:ring-2"
                                                    id="autres-agents-accordion"
                                                    onclick="toggleAccordion('autres-agents-accordion-content', this)">
                                                    <span id="autres-agents-sign">+</span> Autres agents
                                                </button>
                                                <ul id="autres-agents-accordion-content"
                                                    class="hidden pl-6 mt-2 space-y-2">
                                                    <li><a href="{{ route('comptes-payer.formulaire.ouverture-compte-autre-agent') }}"
                                                            class="block text-blue-600 hover:text-blue-800">Ouverture de
                                                            compte</a></li>
                                                    <li><a href="{{ route('comptes-payer.formulaire.desactivation-compte-autre-agent') }}"
                                                            class="block text-blue-600 hover:text-blue-800">Désactivation
                                                            de
                                                            compte</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                    </li>
                    <!-- Catalogue -->
                    <li>
                        <button class="w-full text-left text-black-600 focus:outline-none font-medium"
                            id="catalogue-accordion" onclick="toggleAccordion('catalogue-accordion-content', this)">
                            <span id="catalogue-sign">+</span> Catalogue
                        </button>
                        <ul id="catalogue-accordion-content" class="hidden pl-4 mt-2 space-y-2">
                            <!-- Manuel de procédures -->
                            <li>
                                <a href="{{ route('catalogue.manuel-procedures') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Manuel de procédures
                                </a>
                            </li>
                            <!-- Manuel de l’utilisateur -->
                            <li>
                                <a href="{{ route('catalogue.manuel-utilisateur') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Manuel de l’utilisateur
                                </a>
                            </li>
                            <!-- Demande de biens et de services -->
                            <li>
                                <a href="{{ route('catalogue.demande-biens-services') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Demande de biens et de services
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Comptabilité -->
                    <li>
                        <button class="w-full text-left text-black-600 focus:outline-none font-medium"
                            id="comptabilite-accordion"
                            onclick="toggleAccordion('comptabilite-accordion-content', this)">
                            <span id="comptabilite-sign">+</span> Comptabilité
                        </button>
                        <ul id="comptabilite-accordion-content" class="hidden pl-4 mt-2 space-y-2">
                            <!-- PCEH détaillé -->
                            <li>
                                <a href="{{ route('comptabilite.pceh-detaille') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    PCEH détaillé
                                </a>
                            </li>
                            <!-- Nomenclatures budgétaires -->
                            <li>
                                <a href="{{ route('comptabilite.nomenclatures-budgetaires') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Nomenclatures budgétaires
                                </a>
                            </li>
                            <!-- Nomenclature des pièces justificatives -->
                            <li>
                                <a href="{{ route('comptabilite.nomenclature-pieces-justificatives') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Nomenclature des pièces justificatives
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Textes légaux et réglementaires -->
                    <li>
                        <button class="w-full text-left text-black-600 focus:outline-none font-medium"
                            id="textes-legaux-accordion"
                            onclick="toggleAccordion('textes-legaux-accordion-content', this)">
                            <span id="textes-legaux-sign">+</span> Textes légaux et réglementaires
                        </button>
                        <ul id="textes-legaux-accordion-content" class="hidden pl-4 mt-2 space-y-2">
                            <!-- Loi organique -->
                            <li>
                                <a href="{{ route('textes-legaux.loi-organique') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Loi organique
                                </a>
                            </li>
                            <!-- Arrêté portant Plan comptable haïtien -->
                            <li>
                                <a href="{{ route('textes-legaux.arrete-plan-comptable') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Arrêté portant Plan comptable haïtien
                                </a>
                            </li>
                            <!-- Arrêté portant nomenclatures budgétaires -->
                            <li>
                                <a href="{{ route('textes-legaux.arrete-nomenclatures-budgetaires') }}"
                                    class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Arrêté portant nomenclatures budgétaires
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Matériel -->
                    <li>
                        <a href="{{ route('materiel.index') }}"
                            class="block text-blue-600 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 font-medium">
                            Matériel informatif et pédagogique
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 p-6 pt-20 h-screen overflow-y-scroll">
            {{--             @include('layouts.navigation') --}}

            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        @if (auth()->user()->hasRole('admin'))
                            <a href="{{ route('documents.index') }}"
                                class="mr-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                téléverser
                            </a>
                        @endif

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="mr-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                créer utilisateur
                            </a>
                        @endif

                        @if (auth()->check())
                            <span class="mr-2 text-gray-400">|</span>
                            <span class="mr-2 font-bold text-gray-800 underline dark:text-gray-200">
                                {{ auth()->user()->name }}
                            </span>
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="text-red-600 hover:text-red-800 focus:outline-none">
                                    déconnexion
                                </button>
                            </form>
                        @endif
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-blue-600 hover:text-blue-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            connexion
                        </a>
                    @endauth
                </div>
            @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow mb-4">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            @yield('content')
        </main>
    </div>

    <!-- Script pour gérer l'accordéon et les symboles + / - -->
    <script>
        function toggleAccordion(contentId, button) {
            const content = document.getElementById(contentId);
            const sign = button.querySelector('span');

            content.classList.toggle('hidden');

            if (content.classList.contains('hidden')) {
                sign.textContent = '+';
            } else {
                sign.textContent = '-';
            }
        }
    </script>
</body>

</html>
