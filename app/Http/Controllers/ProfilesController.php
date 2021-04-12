<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function show(User $user)
    {
        return view('profile.index', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update',$user->profile);
        return view('profile.edit')->with(compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update',$user->profile);
        
        if($user->profile == null)
        {
            $profile = new Profile;
            
            $profile->title = request()->input('title');
            $profile->description = request()->input('description');
            $profile->url = request()->input('url');
            $profile->user_id = $user->id;
            
            $profile->save();
        }
        else 
        {
            $data = request()->validate([
                'title' => 'required',
                'description' => 'required',
                'url' => ['required', 'url'],
            ]);
            auth()->user()->profile->update($data);
        }
        return redirect('profile/'.$user->id);
    }
}