<?php

namespace controllers;

use Exception;
use pebble\core\PebbleApp;
use Symfony\Component\HttpFoundation\Request;

/**
 * App controller is for managing specific Application flow.
 * Mainly about MiddleWares called from the PebbleApp.
 * Is optional and can be removed.
 * @package controllers
 */
class AppController
{
	/**
	 * AppController constructor.
	 * Created just before phase 1.
	 * @param PebbleApp $app instance of the PebbleApp
	 */
	public function __construct ( PebbleApp $app )
	{

	}

	/**
	 * Called just after phase 3 and before action is called.
	 * Is useful to prepare data for all actions.
	 * @param Request|null $request The associated request which triggered the route.
	 * @param PebbleApp $app instance of the PebbleApp
	 * @param string $pRouteName The route name from the routes config.
	 * @param Exception $exception Triggering exception.
	 */
	public function beforeAction ( PebbleApp $app, $request, $pRouteName, $exception)
	{

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