<?php namespace App\Http\Middleware;

use Closure;
use App;
use DB;

class SubDomain {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        $prefix = 'laraapp_';
        $account = $request->route('account');
        $dbname = $prefix.$account;


        configureConnectionByName( $dbname, 'root', 'root');
        try{
            DB::connection()->getDatabaseName();
        }catch(Exception $e){
            "database connection error";
            die;
        }

        configureConnectionByName( 'lara_master', 'root', 'root');

        return $next($request);
	}
}
