<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    const JOB_SEEKER = 'seeker';
    const JOB_POSTER = 'employer';

    public function createSeeker()
    {
        return view('user.seeker-register');
    }

    public function createEmployer()
    {
        return view('user.employer-register');
    }

    public function storeSeeker(RegistrationFormRequest $request)
    {
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'user_type' => self::JOB_SEEKER
        ]);

        Auth::login($user);

        $user->sendEmailVerificationNotification();

        return response()->json('success');
        
        // return redirect()->route('verification.notice')->with('successMessage', 'Your account was created!');
    }

    public function storeEmployer(RegistrationFormRequest $request)
    {
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'user_type' => self::JOB_POSTER,
            'user_trial' => now()->addWeek()
        ]);

        Auth::login($user);

        $user->sendEmailVerificationNotification();

        return response()->json('success');
    }

    public function login()
    {
        return view('user.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            if(auth()->user()->user_type === 'employer') {
                return redirect()->to('dashboard');
            }else {
                return redirect()->to('/');
            }
        }
        
        return 'Wrong email or password!';
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }

    public function profile()
    {
        return view('profile.index');
    }

    public function update(Request $request)
    {
        if($request->hasFile('profile_pic')) {
            $imagePath =  $request->file('profile_pic')->store('profile', 'public');

            User::find(auth()->user()->id)->update(['profile_pic' => $imagePath]);
        }

        User::find(auth()->user()->id)->update($request->except('profile_pic'));

        return back()->with('success', 'Your profile has been updated!');
    }
}
