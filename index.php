<?php
require 'core/bootstrap.php';

$routes = [
	'' => 'HomeController@home',
	'/input' => 'InputController@input',
	'/list' => 'ListController@list',
	'/add' => 'InputController@add',
	'/edit' => 'InputController@edit',
	'/incrementElapsedDays' => 'HomeController@incrementElapsedDays',
];

$db = [
	'name'     => 'dryfruits',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');