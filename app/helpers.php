<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

function dashboardRoute(): string
{
    if (Auth::user()->isBusinessType()) {
        return 'dashboard-business';
    }

    return 'dashboard-user';
}
