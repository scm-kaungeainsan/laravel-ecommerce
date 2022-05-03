<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;

class IsCheckout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                Session::put('oldUrl',$request->url());
                return redirect()->route('user.signin');
            }
        }

        return $next($request);
    }
}
