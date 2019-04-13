<?php

namespace App\Http\Middleware;

use Closure;

class AdminRole
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
        if(\Auth::check()) {    
            $user_id = $request->user()->id;
            $isadmin=\DB::table("admin")->where("user_id",$user_id)->count()>0;
            if(!$isadmin){
                \Session::flash("msg","e: check your registration");
                return redirect("/login");
            }
        }
        return $next($request);
    }
}

