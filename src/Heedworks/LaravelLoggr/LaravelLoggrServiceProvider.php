<?php namespace Heedworks\LaravelLoggr;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Heedworks\Loggr\Loggr;

class LaravelLoggrServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('heedworks/laravel-loggr');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['loggr'] = $this->app->share(function($app)
		{
			return new Loggr(Config::get('laravel-loggr::logKey'),Config::get('laravel-loggr::apiKey'));
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}