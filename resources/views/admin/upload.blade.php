@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <!-- Breadcrumb -->
        <nav class="text-sm text-gray-600 mb-4">
            <span class="text-gray-800">Documents</span>
            <span class="mx-2">></span>
            <span class="text-gray-800">Téléverser</span>
        </nav>

        <!-- Upload PDF Form -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
            <form action="{{ route('documents.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="pdf_name" class="block text-sm font-medium text-gray-700">Choisir le document</label>
                    <select id="pdf_name" name="pdf_name"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="administration-mp" selected>Administration - Manuel des procédures</option>
                        <option value="administration-mu">Administration - Manuel des utilisateurs</option>
                        <option value="catalogue-dbs">Catalogue - Demande de biens et de services</option>
                        <option value="catalogue-mp">Catalogue - Manuel des procédures</option>
                        <option value="catalogue-mu">Catalogue - Manuel des utilisateurs</option>
                        <option value="comptabilite-nb">Comptabilité - Nomenclatures budgétaires</option>
                        <option value="comptabilite-npj">Comptabilité - Nomenclature des pièces justificatives</option>
                        <option value="comptabilite-pceh">Comptabilité - PCEH détaillé</option>
                        <option value="comptes-payer-mp">Comptes à payer - Manuel des procédures</option>
                        <option value="comptes-payer-mu">Comptes à payer - Manuel des utilisateurs</option>
                        <option value="execution-budgetaire-mp">Exécution budgétaire - Manuel des procédures</option>
                        <option value="execution-budgetaire-mu">Exécution budgétaire - Manuel des utilisateurs</option>
                        <option value="materiel-informatif-pedagogique">Matériel informatif et pédagogique</option>
                        <option value="textes-legaux-apch">Textes légaux et réglementaires - Arrêté portant Plan comptable
                            haïtien</option>
                        <option value="textes-legaux-apnb">Textes légaux et réglementaires - Arrêté portant nomenclatures
                            budgétaires</option>
                        <option value="textes-legaux-lo">Textes légaux et réglementaires - Loi organique</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="pdf_file" class="block text-sm font-medium text-gray-700">Sélectionner un fichier
                        PDF</label>
                    <input type="file" id="pdf_file" name="pdf_file" accept=".pdf"
                        class="mt-1 block w-full text-sm text-gray-700 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <button type="submit"
                    class="w-full px-4 py-2 bg-blue-600 text-white font-medium text-sm rounded hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                    Télécharger le fichier
                </button>
            </form>
        </div>
        <!-- Display error for the pdf_file input if there's any validation issue -->
        @error('pdf_file')
            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
        @enderror
    </div>

    <!-- Flash Messages -->
    @if (session('success'))
        <div id="toast-success" class="fixed top-4 px-4 py-2 bg-green-600 text-white rounded shadow-lg">
            {{ session('success') }}
        </div>
    @endif

    <!-- JavaScript to Auto-hide Toast after a few seconds -->
    <script>
        window.onload = function() {
            setTimeout(function() {
                var successToast = document.getElementById('toast-success');

                if (successToast) {
                    successToast.style.display = 'none';
                }
            }, 5000); // Hide after 5 seconds
        };
    </script>
@endsection
