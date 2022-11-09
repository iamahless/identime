<?php

namespace App\Http\Controllers;

use App\Services\Auth\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function __construct(
        private AuthService $auth
    ) {}

    public function getRegister(Request $request)
    {
        return view('pages.register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'phone' => 'required|string|min:11',
            'password' => 'required|string|confirmed|min:6',
            "business_name" => 'sometimes|string'
        ]);

        $auth = $this->auth->register($request);

        if ($auth->success) {
            return $this->auth->redirect();
        }

        return redirect()->back()->withError($auth->message);
    }

    public function getLogin(Request $request)
    {
        return view('pages.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    }

    public function getLogout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
