<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class AdminLogin
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
        if(request()->cookie("_ged") == User::find(1)->remember_token ){
            return $next($request);
        }
        else
        {
            return redirect(route('home' ));

        }
        #abort(403);


     
    }
}
