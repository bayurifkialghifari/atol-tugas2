<?php
	
	header('Access-Control-Allow-Origin: *');
	
	session_start();

	require_once '../vendor/autoload.php';




	//Load Config, Helper or Liblaries
	require 'web.php';
	require 'Helper/url.php';
	require 'Helper/input.php';
	require 'Config/config.php';
	require 'Config/database.php';