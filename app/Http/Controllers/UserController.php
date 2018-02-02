<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use Mail;
use App\Mail\VerifyEmail;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('notVerified')->only(['verifyEmail', 'activate', 'resendEmail']);
    }

    public function verifyEmail()
    {
        return view('user.verifyEmail');
    }

    public function resendEmail()
    {
        $user=Auth::user();
        $user->activate_token=str_random(255);
        $user->save();

        Mail::to($user)->send(new VerifyEmail(Auth::user()));

        Session::flash("error_info", "Check your email address");

        return redirect()->route('home');
    }

    public function activate(User $user, string $token)
    {
        if($user->activate_token == $token && $token != null){
            $user->activate_token=null;
            $user->verified=1;
            $user->save();

            Session::flash("error_success", "Email address successfully verified");
        }

        return redirect()->route('home');
    }
}
