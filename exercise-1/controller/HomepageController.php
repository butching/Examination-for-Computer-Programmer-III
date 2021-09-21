<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('homepage.index');
    }
}
