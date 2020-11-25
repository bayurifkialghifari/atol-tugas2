<?php
	
	header('Access-Control-Allow-Origin: *');
	
	session_start();

	require_once '../vendor/autoload.php';




	//Load Config, Helper or Liblaries
	require 'Config/database.php';
	require 'Config/config.php';
	require 'Helper/url.php';
	require 'Helper/application.php';
	require 'web.php';