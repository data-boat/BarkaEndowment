<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    
    public function handle(Request $request, Closure $next)
    {
        // get session variable value
        if (\Session::has('language')) {
            \App::setLocale(\Session::get('language'));
        }
        // set default value for language session variable
        if (\Session::get('language') == ''){
            Session()->put('language', 'en');
        }
        return $next($request);
    }
}
