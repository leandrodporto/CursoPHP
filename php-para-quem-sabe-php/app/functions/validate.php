<?php

function validate(array $fields)
{
    $request = request();

    $validate = [];

    foreach ($fields as $field => $type) {

        switch ($type) {
            case 's':
                $validate[$field] = strip_tags($request[$field]);
                break;
            case 'e':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                break;
            case 'p':
                $validate[$field] = strip_tags($request[$field]);
                $validate[$field] = password_hash($validate[$field], PASSWORD_BCRYPT);
                break;
            case 'i':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
                break;
            default:
                $validate[$field] = strip_tags($request[$field]);
        }
    }

    return (object) $validate;
}

function isEmpty()
{
    $request = request();
    $empty = false;
    foreach ($request as $key => $value) {
        if (empty($request[$key])) {
            $empty = true;
        }
    }
    return $empty;
}
