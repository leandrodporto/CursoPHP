<?php

function validate(array $validations, bool $persistInputs = false, bool $checkCsrf = false)
{
  $result = [];
  $param = '';


  if ($checkCsrf) {
      checkCsrf();    
  }

  foreach ($validations as $field => $validate) {
    $result[$field] = (!str_contains($validate, '|')) ?
      singleValidation($validate, $field, $param) :
      multipleValidations($validate, $field, $param);
  }

  if ($persistInputs) {
    setOld();
  }

  if (in_array(false, $result)) {
    return false;
  }

  return $result;
}


function singleValidation($validate, $field, $param)
{

  if (str_contains($validate, ':')) {
    [$validate, $param] = explode(":", $validate);
  }
  return  $validate($field, $param);
}

function multipleValidations($validate, $field, $param)
{
  $explodePipeValidade = explode('|', $validate);
  $result = [];
  foreach ($explodePipeValidade as $validate) {
    if (str_contains($validate, ':')) {
      [$validate, $param] = explode(":", $validate);
    }

    $result[$field] = $validate($field, $param);

    if (isset($result[$field]) and $result[$field] === false) {
      break;
    }
  }

  return $result[$field];
}
