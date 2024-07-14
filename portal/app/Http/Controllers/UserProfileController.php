<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function edit()
    {
        $currentUser = Auth::user();

        if (!$currentUser) {
            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        }

        return view('user-profile.edit', compact('currentUser'));
    }

    public function update(Request $request)
    {
        $currentUser = Auth::user();

        if (!$currentUser) {
            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        }

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $currentUser->id,
            'phone' => 'nullable|string|max:20',
            'nhs_number' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|string|max:10',
        ]);

        $currentUser->update($request->all());

        return redirect()->route('user-profile.edit')->with('status', 'Profile updated successfully!');
    }
}
