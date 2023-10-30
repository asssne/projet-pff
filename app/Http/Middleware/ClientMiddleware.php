<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ClientMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //       // Vérifiez si l'utilisateur est authentifié
    //       if (!auth()->check()) {
    //         return redirect('/login'); // Redirigez l'utilisateur vers la page de connexion s'il n'est pas authentifié.
    //     }

    //     // Vérifiez si l'utilisateur a le rôle d'administrateur
    //     if (auth()->user()->profil !== 'client') {
    //         return abort(403, 'Accès interdit'); // Redirigez l'utilisateur vers une page d'erreur 403 s'il n'est pas administrateur.
    //     }
    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next , string $profil): Response
    {
      if ($request->user()->profil===$profil)
      return $next($request);
    //   abord(403);
    return abort(403, 'acces interdit' );
    

}
}
