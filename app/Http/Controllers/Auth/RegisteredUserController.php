<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'No_kp' => ['required', 'digits:12'],
            'Nombor_telefon' => ['required', 'min:10'],
        ]);


        $user = User::create([
            'nama' => $request->name,
            'email' => $request->email,
            'no_kp' => $request->No_kp,
            'gaji_pokok' => $request->Gaji_pokok,
            'akaun_bank' => $request->Akaun_bank,
            'nombor_telefon' => $request->Nombor_telefon,
            'jantina' => $request->Jantina,
            'jawatan' => $request->Jawatan,
            'umur' => $request->Umur,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
