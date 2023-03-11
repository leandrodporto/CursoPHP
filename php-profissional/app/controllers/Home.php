<?php

namespace app\controllers;

class Home
{
	public function index($params)
	{

		// $updated = update(
		// 	'users',
		// 	['firstName' => 'Leandro', 'lastName' => 'Porto', 'email' => 'porto@email.com'],
		// 	['id' => 1]
		// );

		// 	$delete = delete('users', ['id'=>503]);

		// var_dump($delete);

		// die();

		$users = all('users');

		return [
			'view' => 'home',
			'data' => [
				'title' => 'Home',
				'users' => $users,
			],
		];
	}
}
