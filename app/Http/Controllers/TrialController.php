<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Trial;
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date|after:tomorrow'
        ]);

        Auth::user()->trials()->create([
            'name' => $request->name,
            'end_at' => $request->date
        ]);

        Session::flash("error_success", "Trial entry successfully added!");

        return redirect()->route('home');
    }

    public function delete(Trial $trial)
    {
        if($trial->user->id==Auth::user()->id){
            $trial->delete();

            Session::flash("error_success", "Entry successfully deleted!");
        }

        return redirect()->route('home');
    }
}
