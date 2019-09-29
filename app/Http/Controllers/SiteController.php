<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class SiteController extends Controller
{
    /**
     * Return 'welcome' view.
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('welcome');
    }
}
