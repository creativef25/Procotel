<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

      if ($request->user()->rol->nombre != $role) {
        return redirect('home')->with('error', 'You have not admin access');
      }else {
        return $next($request);
      }


    }
}
