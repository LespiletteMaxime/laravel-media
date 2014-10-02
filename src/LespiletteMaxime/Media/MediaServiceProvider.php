<?php namespace LespiletteMaxime\Media;

use Illuminate\Support\ServiceProvider;

class MediaServiceProvider extends ServiceProvider {

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
		$this->package('lespilette-maxime/media');

		include __DIR__.'/../../routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['mediahtml'] = $this->app->share(function($app)
		{
			return new MediaHtml;
		});

		// $this->app->booting(function()
		// {
		// 	$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		// 	$loader->alias('MediaHtml','LespiletteMaxime\Media\Facades\MediaHTML');
		// });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('MediaHtml');
	}

}
