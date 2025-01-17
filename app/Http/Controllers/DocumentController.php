<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index()
    {
        return view('admin.upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'pdf_name' => 'required|string',
            'pdf_file' => 'required|file|mimes:pdf|max:2048', // Validate PDF file
        ]);

        $pdfName = $request->input('pdf_name');
        $pdfFile = $request->file('pdf_file');
        
        // Store the file in the 'documents' directory (e.g., storage/app/documents)
        $path = $pdfFile->storeAs('documents', $pdfName . '.pdf', 'public');

        // Return back with success message
        return back()->with('success', 'Le document a été téléchargé avec succès.');
    }
}

