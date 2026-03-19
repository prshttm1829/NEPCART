<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\LoginRequest;
use App\Http\Requests\Login\UpdateProfileRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            Alert::success('Welcome to the dashboard');
            return redirect(route('admin.dashboard'));
        }
        Alert::error('Login Failed', 'Email or password is incorrect');
        return back()->withInput();
    }
    public function profilePage()
    {
        $user = Auth::user();
        return view('auth.updateProfile', compact('user'));
    }
    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = Auth::user();        
        $user->update($request->validated());
        Alert::success('User updated sucessfully');
        return back();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        Alert::success("Login Again");
        return redirect(route('login'));
    }
}
