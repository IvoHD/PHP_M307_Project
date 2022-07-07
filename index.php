<?php
require 'core/bootstrap.php';

$routes = [
	'' => 'HomeController@home',
	'/input' => 'InputController@input',
	'/list' => 'ListController@list',
	'/add' => 'InputController@add'
];

$db = [
	'name'     => 'dryfruits',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');