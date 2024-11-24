<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function getLogin(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route("home");
        }
        return view("auth.login");
    }

    /**
     * Handle login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request)
    {
        // Validate the login form data
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|exists:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Add custom validation for password
        $validator->after(function ($validator) use ($request) {
            $user = User::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                $validator->errors()->add('password', 'Password is incorrect.');
            }
        });

        // If validation fails, redirect back with errors and input
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Attempt to log the user in
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->has('remember'))) {
            // Authentication passed, redirect to intended page
            return redirect()->route("home");
        }

        // If authentication fails, redirect back with error
        return redirect()
            ->back()
            ->withErrors(['email' => 'These credentials do not match our records.'])
            ->withInput();
    }

    /**
     * Handle logout request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getLogout(Request $request)
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
