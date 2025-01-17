@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <!-- Breadcrumb -->
        <nav class="text-sm text-gray-600 mb-4">
            <span class="text-gray-800">Documents</span>
            <span class="mx-2">></span>
            <span class="text-gray-800">Televerser</span>
        </nav>

        <!-- Upload PDF Form -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
            <form action="{{ route('documents.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="pdf_name" class="block text-sm font-medium text-gray-700">Choisir le document</label>
                    <select id="pdf_name" name="pdf_name"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="manual1">Administration - Manuel des procedures</option>
                        <option value="manual2">Administration - Manuel des utilisateurs</option>
                        <option value="manual1">Execution budgetaire - Manuel des procedures</option>
                        <option value="manual2">Execution budgetaire - Manuel des utilisateurs</option>
                        <!-- Add more options here -->
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
    </div>
@endsection
