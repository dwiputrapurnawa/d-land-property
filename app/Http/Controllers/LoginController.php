<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {

        // Validate the incoming request
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Attempt to authenticate with username and password
        if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            // Regenerate the session to prevent session fixation
            $request->session()->regenerate();

            // Redirect the user to their intended location or a default page
            return redirect()->intended('/admin/panel');
        }

        // If authentication fails, redirect back with an error message
        return back()->with("error", "Username or password is incorrect");
    }

    function index()
    {
        return view('admin.login.index');
    }

    public function logout(Request $request): RedirectResponse
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/");
    }
}
