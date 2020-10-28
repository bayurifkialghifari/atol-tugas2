<?php

	use App\Core\Route;

	$app 		= new Route;

	// Router
	$app->group(['url' => '/'], '\Home', 'hoem');