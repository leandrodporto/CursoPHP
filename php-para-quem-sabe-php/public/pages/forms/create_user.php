<?php 

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message', 'Preencha todos os campos');
   return redirect('create_user');
}

$validate = validate(
    [
        'name' => 's',
        'email'=> 'e',
        'lastName'=>'s',
        'password'=>'p',
    ]
);

$cadastrado = create('users', $validate);

if($cadastrado){
    flash('message', "Cadastrado com sucesso", 'success');
    return redirect('create_user');
}

flash('message', "Erro ao cadastrar");
     redirect('create_user');
     