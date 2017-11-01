<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect('login');
        }

        if ($request->user()->type !== 'admin') {
            return redirect('dashboard')
                ->withError('You are not authorized');
        }

        return $next($request);
    }
}
