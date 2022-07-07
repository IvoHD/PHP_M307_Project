<?php
require 'core/bootstrap.php';

$routes = [
	'' => 'HomeController@home',
	'/edit' => 'EditController@edit',
	'/register' => 'RegisterController@register',
	'/list' => 'ListController@list',
];

$db = [
	'name'     => 'DryFruits',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');