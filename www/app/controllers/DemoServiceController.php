<?php

namespace controllers;

use pebble\core\PebbleApp;
use Symfony\Component\HttpFoundation\Request;

class DemoServiceController
{
	/**
	 * DemoServiceController constructor.
	 * @param PebbleApp $app
	 */
	public function __construct (PebbleApp $app)
	{
		// Here we register and configure specific silex modules or providers for this controller
		// If you need to register anything application wide, do it inside AppController->initServices
		//$app->getSilex()->register(new ValidatorServiceProvider());
	}


	// -------------------------------------------------------------------------

	/**
	 * Demo action for this service
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function demoAction ( PebbleApp $app, Request $request )
	{
		// Return JSON
		return $app->json([
			'response' => [ /*...*/ ]
		]);
	}
}