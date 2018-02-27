<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class MaintenanceMode
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
        $status = DB::table('settings')->where('id', '=', 'maintenance_mode')->first();
        if($status->value == 0) {
            return $next($request);
        } else {
            return redirect('/maintenance');
        }
    }
}
