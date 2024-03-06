<?php

namespace App\Http\Controllers\admin;

use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    // Route to register
    public function getRegister()
    {
        return view('sign-up');
    }

    // Create new users
    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $formData['name'];
        $user->email = $formData['email'];
        $user->password = $formData['password'];

        $user->save();
        auth()->login($user);

        return redirect()->route('home')->with('success', "User created & Login successfully.");
    }


    // Route to login
    public function login()
    {
        return view('login');
    }

    // Authenticate
    public function authenticate(Request $request){
        $formData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($formData)) {
            $request->session()->regenerate();
            return redirect()
                ->route("home")
                ->with("success", "User logged in successfully.");
        }

        return back()
            ->withErrors(["email" => "invalid creadentials"])
            ->onlyInput("email");
    }

    // Logout function
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return back()->with('success', "Logout successfully.");
    }
}
