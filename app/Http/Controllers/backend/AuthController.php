<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    private $dir = 'backend.auth.';

    // return login page for user
    public function login()
    {
        return view($this->dir . 'login');
    }

    // check credentials
    public function checkAuth(UserLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->with('message', 'Login details are not valid');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            $students = Student::count();
            $subjects = Subject::count();
            $courses = Course::count();
            return view('back.welcome', compact('students', 'courses', 'subjects'));
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
