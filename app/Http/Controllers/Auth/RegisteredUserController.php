<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request): Response
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // $user['browser_language'] = $request->header('browser_language', env('APP_LOCALE'));
        // $user['browser_language'] = $request->header('Accept-Language');

        $user = User::create([
            'name' => $request->name,
            'browser_language' => $request->header('Accept-Language', env('APP_LOCALE')),
            'email' => $request->email,
            'password' => Hash::make($request->string('password')),
        ]);


        // Mail::to($request->email)->sendNow(new VerificationEmail($user));

        event(new Registered($user));

        // disabled user login
        // Auth::login($user);

        return response()->noContent();

        // dd($request);
        // return view('sysview.sysview');
    }
}
