<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class room_admin_mid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        print_r(Auth::user()->id);
        // if(Auth()->user()->acc_id == 'ผู้ดูแลห้องประชุม')
        // {

        //     return $next($request);
        // }
        // abort(404);
    }
}
