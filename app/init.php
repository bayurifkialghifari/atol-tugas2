<?php
	
	// HEADER GGWP
	header('Access-Control-Allow-Origin: *');
	
	// SESSION GGWP
	session_start();
	
	// AUTOLOAD GGWP
	require_once '../vendor/autoload.php';




	//Load Config and Helper
	require 'Config/database.php';
	require 'Config/config.php';
	require 'Helper/url.php';
	require 'Helper/application.php';
	require 'web.php';