<?php

class ServiceProvider extends Illuminate\Support\ServiceProvider {

	public function register() {

	}

	public function boot() {
	
		$this->loadRoutesFrom(__DIR__.'routes/routes.php');
	
	}
}