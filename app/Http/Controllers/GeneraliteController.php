<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneraliteController extends Controller
{
     /**
     * Display the introduction page.
     *
     * @return \Illuminate\View\View
     */
    public function introduction()
    {
        return view('generalites.generalites');
    }

    /**
     * Display the menu page.
     *
     * @return \Illuminate\View\View
     */
    public function menu()
    {
        return view('generalites.menu');
    }
}
