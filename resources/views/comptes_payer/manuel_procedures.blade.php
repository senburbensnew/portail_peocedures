@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <!-- Breadcrumb -->
        <nav class="text-sm text-gray-600 mb-4">
            <span class="text-gray-800">Comptes à payer</span>
            <span class="mx-2">></span>
            <span class="text-gray-800">Manuel de procédures</span>
        </nav>

        <!-- Page Title & Download Button -->
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-800">Manuel de procédures</h1>
            <a href="{{ asset('documents/comptes-payer-mp.pdf') }}" download
                class="inline-block px-4 py-2 bg-blue-600 text-white font-medium text-sm rounded hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                Télécharger
            </a>
        </div>

        <!-- PDF Viewer -->
        <div class="border border-gray-300 rounded-lg overflow-hidden">
            <embed src="{{ asset('documents/comptes-payer-mp.pdf') }}" type="application/pdf" width="100%" height="600px"
                class="block">
        </div>
    </div>
@endsection
