<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckUserIsDefault
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        if ($request->user()->isDefaultType()) {
            return $next($request);
        }

        return abort(403, 'Forbidden');
    }
}
