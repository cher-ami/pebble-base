<?php

namespace controllers;

use pebble\core\PebbleApp;
use Symfony\Component\HttpFoundation\Request;

class PagesController
{
	/**
	 * Home page action
	 * @param PebbleApp $app
	 * @param Request $request
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
	 */
	public function index (PebbleApp $app, Request $request)
	{
		return $app->view(
			'pages/index',
			$request,
			[
				// Vars for home page
			]
		);
	}
}