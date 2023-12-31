<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next, $customMessageerror = null)
    // {
    //     if (!session()->has('loginId')) {
    //         $message = $customMessageerror ?: 'Unauthorized access, please log in';
    //         return redirect('admin/login')->with('fail', $message);
    //     }

    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next, )
    {
        if (!session()->has('loginId')) {
            // $message = $customMessageerror ?: 'Unauthorized access, please log in';
            return redirect()->route('alert');
        }

        return $next($request);
    }
}
