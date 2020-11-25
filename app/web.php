<?php

	use App\Core\Route;

	$app 			= new Route;

	// $app->add('Alamat web', 'Class yang ada dicontroller', 'method class', 'method request');

	// Router
	$app->add('/qweqwe', 'Home', 'test');

	$app->add('/anjay', 'Home', 'index');

	$app->run('/');
