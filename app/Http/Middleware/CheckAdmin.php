<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!session()->has('user_data') || !session()->has('profile')){
            abort(401);
        }
        $session = session()->get('profile');
        $group_id = $session['group_id'];
        if($group_id != 2){
            abort(401);
        }
        return $next($request);
    }
}