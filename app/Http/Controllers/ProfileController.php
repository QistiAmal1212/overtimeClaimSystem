<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

   /**
 * Update the user's profile information.
 */
public function update(ProfileUpdateRequest $request): RedirectResponse
{
    $user = $request->user();
    $user->nama = $request->input('nama'); // Update the 'nama' attribute
    $user->email = $request->input('email');

    $user->no_kp = $request->input('no_kp');
    $user->nombor_telefon = $request->input('nombor_telefon');
    $user->jantina = $request->input('jantina');
    $user->jawatan = $request->input('jawatan');
    $user->gaji_Pokok = $request->input('gaji_pokok');
    $user->umur = $request->input('umur');
    $user->akaun_bank = $request->input('akaun_bank');
    if ($request->user()->isDirty('email')) {
        $request->user()->email_verified_at = null;
    }

    $user->save();

    return Redirect::route('profile.edit')->with('status', 'profile-updated');
}


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

   
}
