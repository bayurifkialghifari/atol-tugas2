<?php

	use App\Core\Route;

	$app 			= new Route;

	/** 
	* 	@var
	*  
	*	$app->add( 'Alamat web', 
	*				'Class yang ada dicontroller contoh `Ggwp\Anjay` or `Anjay`', 
	*				'Method class `index`', 
	* 				'Method request `post, get, put, delete`');
	*   @param
	*   Ketik '/:id/id2/id3' pada alamat web untuk mengirimkan parameter
	*/

	// Router
	$app->add('/', '\Barang');
	$app->add('/barang/insert', '\Barang', 'insert', 'post');
	$app->add('/barang/update', '\Barang', 'update', 'post');
	$app->add('/barang/delete', '\Barang', 'delete', 'post');

	$app->add('/belanja', '\Belanja');
	$app->add('/belanja/insert', '\Belanja', 'insert', 'post');
	$app->add('/belanja/update', '\Belanja', 'update', 'post');
	$app->add('/belanja/delete', '\Belanja', 'delete', 'post');

	$app->add('/user', '\User');
	$app->add('/user/insert', '\User', 'insert', 'post');
	$app->add('/user/update', '\User', 'update', 'post');
	$app->add('/user/delete', '\User', 'delete', 'post');

	// Auth
	$app->add('/login', '\Auth\Login');
	$app->add('/doLogin', '\Auth\Login', 'doLogin', 'post');
	$app->add('/logout', '\Auth\Login', 'logout');

	$app->run('/');
