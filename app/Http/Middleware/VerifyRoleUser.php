<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyRoleUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!$request->user()) {
            return redirect('/auth/login');
        }

        if ($request->user()->rol_id != 1) {
            // Redirigir al usuario a la página de inicio de sesión
            return redirect('/cursos');
        }

        return $next($request);
    }
}
