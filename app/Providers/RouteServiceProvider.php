<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
//        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAdministratorRoutes();
	
	    $this->mapGuru();
	
	    $this->mapKepalaSekolah();
	
	    $this->mapPengawasSekolahRoutes();
	
	    $this->mapOperatorSekolah();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/web.php');
        });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace,
            'prefix' => 'api',
        ], function ($router) {
            require base_path('routes/api.php');
        });
    }
	

	protected function mapAdministratorRoutes()
	{
		Route::group([
			'middleware' => ['auth', 'web', 'administrator'],
			'namespace' => $this->namespace,
			'prefix' => 'administrator'
		], function ($router) {
			require base_path('routes/administrator.php');
		});
	}
	
	protected function mapPengawasSekolahRoutes()
	{
		Route::group([
			'middleware' => ['auth', 'web', 'pengawas-sekolah'],
			'namespace' => $this->namespace,
			'prefix' => 'pengawas-sekolah'
		], function ($router) {
			require base_path('routes/pengawas-sekolah.php');
		});
	}
	
	protected function mapOperatorSekolah()
	{
		Route::group([
			'middleware' => ['auth', 'web', 'operator-sekolah'],
			'namespace' => $this->namespace,
			'prefix' => 'operator-sekolah'
		], function ($router) {
			require base_path('routes/operator-sekolah.php');
		});
	}
	
	protected function mapGuru()
	{
		Route::group([
			'middleware' => ['auth', 'web', 'guru'],
			'namespace' => $this->namespace,
			'prefix' => 'guru'
		], function ($router) {
			require base_path('routes/guru.php');
		});
	}
	
	protected function mapKepalaSekolah()
	{
		Route::group([
			'middleware' => ['auth', 'web', 'kepala-sekolah'],
			'namespace' => $this->namespace,
			'prefix' => 'kepala-sekolah'
		], function ($router) {
			require base_path('routes/kepala-sekolah.php');
		});
	}
}
