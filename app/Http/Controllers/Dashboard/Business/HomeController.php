<?php

namespace App\Http\Controllers\Dashboard\Business;

use App\Http\Controllers\Controller;
use App\Services\Dashboard\Business;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct(
        private Business $business
    )
    {
    }

    public function index(Request $request): View
    {
        $user = Auth::user();
        $business = $this->business->getKeys($user->business->id);

        return view('dashboard.business.home', [
            'user' => $user,
            'business' => $business->business,
            'keys' => $business->keys
        ]);
    }
}
