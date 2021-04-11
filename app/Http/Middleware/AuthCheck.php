<?php

namespace App\Http\Middleware;

use Closure;
use Session; 
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Session::get('loggedUser');
        if (!$user && ($request->path() != 'login' && $request->path() != 'register')) {
            return redirect('/login')->with('Voce Precisa estar Logado');
        }

        if ($user && ($request->path() == 'login' || $request->path() == 'register')) {
            return back();
        }
        return $next($request);
    }
}
