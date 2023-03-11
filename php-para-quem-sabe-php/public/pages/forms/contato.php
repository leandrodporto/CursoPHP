<?php 

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message', 'Preencha todos os campos');
   return redirect('contato');
}

$validate = validate(
    [
        'name' => 's',
        'email'=> 'e',
        'subject'=>'s',
        'message'=>'s',
    ]
);
/*
if (send($validate)){
    flash('message', "Formulario enviado com sucesso");
    return redirect('contato');
}

*/
$data =[
    "quem" => $validate->name,
    "para" => 'portoserver1994@gmail.com',
    "mensagem" => $validate->message,
    "assunto" => $validate->subject,    
];

if (send($data)){
    flash('message', "Formulario enviado com sucesso");
    return redirect('contato');
}
