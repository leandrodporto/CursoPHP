<?php

namespace app\controllers;

class User
{
  public function show($params)
  {
    if (!isset($params['user'])) {
      return redirect('/');
    }

    $user = findBy('users', 'id', $params['user']);
    var_dump($user);
    die();
  }

  public function create()
  {
    $users = all('users');

    return [
      'view' => 'create',
      'data' => ['title' => 'Create']
    ];
  }

  public function store()
  {
    $validate = validate(
      [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'email|unique:users',
        'password' => 'required|maxlen:12',
      ], persistInputs: true, checkCsrf:true,
    );

    if (!$validate) {
      return redirect('/user/create');
    }

    $validate['password'] = password_hash($validate['password'], PASSWORD_DEFAULT);

    $created = create('users', $validate);

    if (!$created) {
      setcookie('message', 'Ocorreu algum erro ao cadastrar, tente novamente em alguns segundos');
      return redirect('/user/create');
    }
    return redirect('/');
  }

}
