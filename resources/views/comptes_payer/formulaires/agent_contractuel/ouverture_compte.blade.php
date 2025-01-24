@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <!-- Breadcrumb -->
        <nav class="text-sm text-gray-600 mb-4">
            <span class="text-gray-800">Comptes à payer</span>
            <span class="mx-2">></span>
            <span class="text-gray-800">Agent Contractuel</span>
            <span class="mx-2">></span>
            <span class="text-gray-800">Ouverture de compte</span>
        </nav>

        <!-- Titre -->
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Formulaire d'Ouverture de Compte - Agent Contractuel</h1>

        <!-- Formulaire -->
        <form method="POST">
            @csrf

            <!-- Informations générales -->
            <div class="mb-8 p-4 border border-gray-300 rounded-lg bg-gray-50 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Informations Générales</h2>
                <div class="grid grid-cols-2 gap-4">
                    <!-- Nom du fournisseur -->
                    <div>
                        <label for="nom" class="block text-sm font-medium text-gray-700">Nom du Fournisseur</label>
                        <input type="text" name="nom" id="nom" value="{{ old('nom') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300"
                            required>
                        @error('nom')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Numéro d'Identification Fiscale (NIF) -->
                    <div>
                        <label for="nif" class="block text-sm font-medium text-gray-700">Numéro d'Identification
                            Fiscale (NIF)</label>
                        <input type="text" name="nif" id="nif" value="{{ old('nif') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300"
                            required>
                        @error('nif')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Coordonnées -->
            <div class="mb-8 p-4 border border-gray-300 rounded-lg bg-gray-50 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Coordonnées</h2>
                <div class="grid grid-cols-2 gap-4">
                    <!-- Adresse -->
                    <div>
                        <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
                        <textarea name="adresse" id="adresse" rows="3"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300"
                            required>{{ old('adresse') }}</textarea>
                        @error('adresse')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Téléphone -->
                    <div>
                        <label for="telephone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                        <input type="text" name="telephone" id="telephone" value="{{ old('telephone') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300">
                        @error('telephone')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Détails bancaires -->
            <div class="mb-8 p-4 border border-gray-300 rounded-lg bg-gray-50 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Détails Bancaires</h2>
                <div class="grid grid-cols-2 gap-4">
                    <!-- Nom de la Banque -->
                    <div>
                        <label for="banque" class="block text-sm font-medium text-gray-700">Nom de la Banque</label>
                        <input type="text" name="banque" id="banque" value="{{ old('banque') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300"
                            required>
                        @error('banque')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Numéro de Compte -->
                    <div>
                        <label for="numero_compte" class="block text-sm font-medium text-gray-700">Numéro de Compte</label>
                        <input type="text" name="numero_compte" id="numero_compte" value="{{ old('numero_compte') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300"
                            required>
                        @error('numero_compte')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Bouton de soumission -->
            <div class="flex justify-end">
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white font-medium text-sm rounded hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                    Ouvrir le Compte
                </button>
            </div>
        </form>
    </div>
@endsection
