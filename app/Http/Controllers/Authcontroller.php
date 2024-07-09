<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Mail\FogotPasswordMail;
use Mail;
use Str;
use Hash;

class Authcontroller extends Controller
{
    public function login()
    {
        if (!empty(Auth::check())) {
            if (Auth::user()->user_type == 1) {
                return redirect('admin/dashboard');
            } else if (Auth::user()->user_type == 2) {
                return redirect('teacher/dashboard');
            } else if (Auth::user()->user_type == 3) {
                return redirect('student/dashboard');
            } else if (Auth::user()->user_type == 4) {
                return redirect('parent/dashboard');
            }
        }

        return view("auth.login");
    }
    
    public function authlogin(Request $request)
    {
        request()->validate([
            'email' => 'required'
        ]);
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            if (Auth::user()->user_type == 1) {
                return redirect('admin/dashboard');
            } else if (Auth::user()->user_type == 2) {
                return redirect('teacher/dashboard');
            } else if (Auth::user()->user_type == 3) {
                return redirect('student/dashboard');
            } else if (Auth::user()->user_type == 4) {
                return redirect('parent/dashboard');
            }
        } else {
            return back()->with('error', 'Please Enter Correct Email & Password');
        }
    }

    public function forgotpassword()
    {
        return view('auth.forgot');
    }
    public function postForgotPassword(Request $request)
    {
        $user = User::getEmailSingle($request->email);
        if (!empty($user)) {
            $user->remember_token = Str::random(30);
            $user->save();
            Mail::to($user->email)->send(new FogotPasswordMail($user));
            return redirect()->back()->with('success', 'Please Check your Email to Reset your Password');

        } else {
            return redirect()->back()->with('error', 'Email Not Found');
        }

    }

    public function reset($remember_token)
    {
        $user = User::getTokenSingle($remember_token);
        if (!empty($user)) {
            $data['user'] = $user;
            return view('auth.reset', $data);
        } else {
            abort(404);
        }
    }

    public function PostReset($token, Request $request)
    {
        if ($request->password == $request->cpassword) {
            $user = User::getTokenSingle($token);
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30);
            $user->save();
            return redirect(url(''))->with('success', 'Password Changed Successfully');
        } else {
            return redirect()->back()->with('error', 'Password & Confirm Pasword does not match');

        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
}
