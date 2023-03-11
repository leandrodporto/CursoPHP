<?php 

function required($field)
{
    if ($_POST[$field] === '') {
        setFlash($field, "Este campo é obrigatório");
        return false;
    }

    return strip_tags($_POST[$field]);
}

function email($field)
{
    $emailIsValid = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);
    if (!$emailIsValid) {
        setFlash($field, "Este campo necessita de um email válido");
        return false;
    }

    return filter_input(INPUT_POST, $field, FILTER_SANITIZE_EMAIL);
}

function unique($field, $param)
{
    $data = filter_input(INPUT_POST, $field, FILTER_SANITIZE_EMAIL);
    $user = findBy($param, $field, $data);

    if ($user) {
        setFlash($field, "Email já cadastrado");
    }

    return $data;
}

function maxlen($field, $param)
{
    $data = strip_tags($_POST[$field]);
    if (strlen($data) > $param) {
        setFlash($field, "Esse campo não pode passar de {$param} caracteres");
        return false;
    }

    return $data;
}
