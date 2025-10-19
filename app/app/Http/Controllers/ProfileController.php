<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileData;

class ProfileController extends Controller
{
    public function profile(){
        return view('profile', ['user' => Auth::user()]);
    }

    public function edit(){
        return view('profile_edit', ['user' => Auth::user()]);
    }

    public function update(ProfileData $request)
{
    $validated = $request->validated();

    Auth::user()->update($validated);

    return redirect()->route('profile.show')->with('status', 'プロフィールを更新しました。');
}

}
