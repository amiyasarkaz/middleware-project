<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario autenticado es administrador 
        if (auth()->user()->is_admin) {
            return $next($request); // Si es admin, continúa al controlador
        }

        // Si no es admin, redirige a la página principal o muestra un error
        return redirect('/'); 
        // O return response('No tienes permisos';
    }
}
