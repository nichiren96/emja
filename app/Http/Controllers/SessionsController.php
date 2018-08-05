<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('public.sessions.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }

    public function store()
    {
       // dd(request(['email', 'password']));
        // Attempt to authenticate the user
        if( !auth()->attempt(request(['email', 'password']))) {
            return back()->with(['error' => 'Bad credentials']);
        }

        switch(auth()->user()->role_id) {
            case 1:
                return redirect(route('admin_dashboard'));
                break;
            case 2:
                return redirect(route('user_advert'));
                break;
            case 3:
                return redirect(route('candidate_dashboard'));
                break;

        }


    }
}
