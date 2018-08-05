<?php

namespace App\Http\Controllers;

Use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('public.registrations.create');
    }

    public function store()
    {
        // Validate the form
        $this->validate(request(), [
            'role_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        // Create and save the user
        $user = User::create(request(['firstname', 'lastname', 'email', 'password', 'role_id']));

        // Sign them in
        auth()->login($user);

        // Redirect
        return redirect(route('user_advert'));
    }
}
