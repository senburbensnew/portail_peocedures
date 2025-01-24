@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <!-- Breadcrumb -->
        <nav class="text-sm text-gray-600 mb-4">
            <span class="text-gray-800">Comptes à payer</span>
            <span class="mx-2">></span>
            <span class="text-gray-800">Fournisseur etranger</span>
            <span class="mx-2">></span>
            <span class="text-gray-800">Radiation de compte</span>
        </nav>

        <!-- Titre -->
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Formulaire de Radiation de Compte - Fournisseur Etranger</h1>

        <!-- Formulaire -->
        <form method="POST">
            @csrf

            <!-- Informations du fournisseur -->
            <div class="mb-8 p-4 border border-gray-300 rounded-lg bg-gray-50 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Informations du Fournisseur</h2>
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

            <!-- Motif de la radiation -->
            <div class="mb-8 p-4 border border-gray-300 rounded-lg bg-gray-50 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Motif de la Radiation</h2>
                <div>
                    <label for="motif" class="block text-sm font-medium text-gray-700">Motif</label>
                    <textarea name="motif" id="motif" rows="5"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300"
                        required>{{ old('motif') }}</textarea>
                    @error('motif')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Confirmation -->
            <div class="mb-8 p-4 border border-gray-300 rounded-lg bg-gray-50 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Confirmation</h2>
                <div class="flex items-center">
                    <input type="checkbox" name="confirmation" id="confirmation"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" required>
                    <label for="confirmation" class="ml-2 block text-sm text-gray-700">
                        Je confirme la radiation définitive de ce compte.
                    </label>
                    @error('confirmation')
                        <span class="text-red-500 text-sm ml-4">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Bouton de soumission -->
            <div class="flex justify-end">
                <button type="submit"
                    class="px-4 py-2 bg-red-600 text-white font-medium text-sm rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-300">
                    Radier le Compte
                </button>
            </div>
        </form>
    </div>
@endsection
