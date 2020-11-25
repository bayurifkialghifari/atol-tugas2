<?php

	function view($view, $data = [])
	{
		// Array key to new variable
		extract($data, EXTR_PREFIX_SAME, "wddx");

		$data 					= [];

		require_once '../app/Views/' . $view . '.php';
	}