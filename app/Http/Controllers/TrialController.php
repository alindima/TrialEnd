<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verifyEmail');
    }

    public function create()
    {
        return view('trial.create');
    }

    public function store()
    {
        //
    }
}
