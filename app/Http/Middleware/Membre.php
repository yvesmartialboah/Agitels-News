<?php

namespace App\Http\Middleware;

use Closure;

class Membre
{
    /**
     * Handle an incoming request. | Ce middleware réprésente l'administrateur de la plateforme
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user && $user->membre) {
            return $next($request);
        }
        return redirect()->route('home');
    }
}
