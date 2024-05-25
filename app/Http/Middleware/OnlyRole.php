<?php

namespace App\Http\Middleware;

use App\Enums\UserRoleEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OnlyRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $roles = '', Bool $disableBypassAdmin = false): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $allowRoles = explode('|', $roles);

        if ($roles === '') {
            return $next($request);
        }

        if ($user->hasRole(UserRoleEnum::Superadmin)) {
            return $next($request);
        }

        if (!$disableBypassAdmin && $user->hasRole(UserRoleEnum::Admin)) {
            return $next($request);
        }

        if ($user->hasRole($allowRoles)) {
            return $next($request);
        }

        return abort(403);
    }
}
