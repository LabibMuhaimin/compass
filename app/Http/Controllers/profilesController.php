<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

use Session;
use DB;

class profilesController extends Controller

{
      public function index($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('profile.profile')
            ->with('user', $user);
    }

    public function edit()
    {
        return view('profile.edit')->with('info', Auth::user()->profile);
    }

    public function update(Request $r)
    {

        $this->validate($r, [
            'location' => 'required',
            'about' => 'required|max:255'
        ]);

        Auth::user()->profile()->update([
            'location' => $r->location,
            'about' => $r->about
        ]);

        if($r->hasFile('avatar'))
        {
            Auth::user()->update([
                'avatar' => $r->avatar->store('public/avatars')
            ]);
        }

        Session::flash('success', 'Profile updated.');
        return redirect()->route('home');

    }



   }