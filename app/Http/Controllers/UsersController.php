<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    // Load the register page 
    public function registerPage() {
        return view('users.registerPage');
    }
    // load the login page 

    public function loginPage() {
        return view('users.loginPage');
    }
    


    // store the user's data (register)
    public function storeUserData(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:2'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);

        // Hash the password 

        $formFields['password'] = bcrypt($formFields['password']);

        // Create the user 

        $user = User::create($formFields);

        // Login 

        auth()->login($user);

        // Redirect the user to the main page 

        return redirect('/')->with('message', 'You logged in seccussfuly!');
    }

    // validate user's credentials (login)

    public function credentialsVerification(Request $request) {

        $formFields = $request->validate([
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Welcome back!');
        }

        return back()->withErrors(['email' => 'invalid credentials']);
    }

    // logout 

    public function logOut(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back()->with('message', 'You logedout!');
    }
}
