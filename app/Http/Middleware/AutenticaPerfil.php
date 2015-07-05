<?php

namespace App\Http\Middleware;

use Closure;

class AutenticaPerfil
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $perfil
     * @return mixed
     */
    public function handle($request, Closure $next, $perfil)
    {
        if ($request->user()->tipo != $perfil) {
            return redirect()->route('home');
        }

        return $next($request);
    }

}