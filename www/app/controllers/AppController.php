<?php

namespace controllers;

use Exception;
use pebble\core\PebbleApp;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * App controller is for managing specific Application flow.
 * Mainly about MiddleWares called from the PebbleApp.
 * Is optional and can be removed.
 * @package controllers
 */
class AppController
{
	// ------------------------------------------------------------------------- MODELS


	// ------------------------------------------------------------------------- INIT

	/**
	 * AppController constructor.
	 * Created just before phase 1.
	 * @param PebbleApp $app instance of the PebbleApp
	 */
	public function __construct ( PebbleApp $app )
	{

	}

	/**
	 * Init and register custom services for this app.
	 * Can add TwigHelpers or register silex components which are not already loaded by Pebble.
	 * @param PebbleApp $app instance of the PebbleApp
	 * @param Application $silexApp instance of the SilexApp
	 */
	public function registerServices ( PebbleApp $app, Application $silexApp )
	{
		// Example
		//$silexApp->register( new SessionServiceProvider() );
	}

	/**
	 * Init application dependencies.
	 * Called just after initServices so Silex and configurations are configured.
	 * We can now load application models / apis / etc
	 * @param PebbleApp $app instance of the PebbleApp
	 */
	public function initAppDependencies (PebbleApp $app)
	{
		// Example
		// $this->_model = new Model( $app );
	}


	// ------------------------------------------------------------------------- MIDDLE WARES

	/**
	 * Called just after phase 3 and before action is called.
	 * Is useful to prepare data for all actions.
	 * Action can be prevented if a response is returned.
	 * Ex : return a RedirectResponse if user do not have good credentials for this action.
	 * @param Request|null $request The associated request which triggered the route.
	 * @param PebbleApp $app instance of the PebbleApp
	 * @param string $pRouteName The route name from the routes config.
	 * @param Exception $exception Triggering exception.
	 * @return Response|mixed|null Return something to prevent action.
	 */
	public function beforeAction ( PebbleApp $app, $request, $pRouteName, $exception)
	{
		// Allow action
		return null;
	}


	/**
	 * Called just before the view is called.
	 * Is useful to prepare additional data common for all views.
	 * @param PebbleApp $app instance of the PebbleApp
	 * @param string $pViewName Called view name
	 * @param Request $request The associated request which triggered the route.
	 */
	public function beforeView ($app, $pViewName, $request)
	{

	}
}