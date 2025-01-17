<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExecutionController extends Controller
{
    public function index()
    {
        return view('execution_budgetaire.index');
    }
}
