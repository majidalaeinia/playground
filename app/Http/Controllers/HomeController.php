<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Return ajax-request view.
     *
     * @return Factory|View
     */
    public function ajaxRequest()
    {
        return view('ajax-request');
    }


    /**
     * Apply ajax request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();

        return response()->json(['success'=>$input['name']]);
    }
}
