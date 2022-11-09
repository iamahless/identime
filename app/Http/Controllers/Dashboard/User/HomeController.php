<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $wallets = $user->wallets()->whereNotNull('is_verified_at')->get();

        return view('dashboard.user.home', [
            'user' => $user,
            'wallets' => $wallets
        ]);
    }
}
