<?php 

namespace Allurco\Checkfront;

use Illuminate\Support\ServiceProvider;
use Allurco\Checkfront\CheckfrontAPI;

class CheckfrontServiceProvider extends ServiceProvider {

    protected $defer = true;

	public function boot() {
		$this->publishes([
			__DIR__.'/../config/checkfront.php' => config_path('checkfront.php'),
		], 'checkfront');
    }
    
    public function register() {
		$this->mergeConfigFrom( __DIR__.'/../config/checkfront.php', 'checkfront');
        $this->app->singleton('CheckfrontAPI', function($app) {
            $config = $app->make('config');
            $host = $config->get('checkfront.host');
            $auth_type = $config->get('checkfront.auth_type');
            $api_key = $config->get('checkfront.api_key');
            $api_secret = $config->get('checkfront.api_secret');
            $consumer_key = $config->get('checkfront.consumer_key');
            $consumer_secret = $config->get('checkfront.consumer_secret');
            $redirect_uri = $config->get('checkfront.redirect_uri');
            
            return new CheckfrontAPI([
                'host'=> $host,
                'auth_type' => $auth_type,
                'api_key'  => $api_key,
                'api_secret' => $api_secret,
                'consumer_key'  => $consumer_key,
                'consumer_secret' => $consumer_secret,
                'redirect_uri'=> $redirect_uri
            ]);
        });
    }

    public function provides() {
        return ['CheckfrontAPI'];
    }
}