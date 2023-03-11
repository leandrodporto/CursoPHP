<?php
/*
function send($data){

    $to = 'portoserver1994@gmail.com';
    $subject= $data->subject;
    $message= $data ->message;
    $headers="From: {$data->email}"."\r\n".'Reply-To: leandrodporto@gmail.com'."\r\n".'X-Mailer: PHP/'.phpversion();

    
    return mail($to, $subject, $message, $headers);
}*/

function send(array $data)
{
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain';
    $email->isSMTP();
    $email->Host = 'sandbox.smtp.mailtrap.io';
    $email->SMTPAuth = true;
    $email->Port = 2525;
    $email->Username = '89bbca06c674ae';
    $email->Password = '213083b1797059';
    $email->isHTML(true);
    $email->setFrom('leandrodporto@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
    $email->MsgHTML($data['mensagem']);

    return $email->send();
}
