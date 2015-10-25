<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Return a view of the about page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('origins.about');
    }

    /**
     * Return a view of the team page
     *
     * @return \Illuminate\View\View
     */
    public function team()
    {
        return view('origins.team');
    }
}
