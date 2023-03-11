<?php

function update(string $table, array $fields, array $where)
{
  try {
    if (!arrayIsAssociative($fields) && !arrayIsAssociative($where)) {
      throw new Exception('O array tem que ser associativo para update ');
    }

		$connect = connect();

		$sql = "update {$table} set ";
		foreach(array_keys($fields) as $field){
			
			$sql.="{$field} = :{$field}, ";

		}
		$sql = trim($sql,', ');

		$whereFilds = array_keys($where);

		$sql.= " where {$whereFilds[0]} = :{$whereFilds[0]}";

		$data = array_merge($fields, $where);

		$prepare = $connect->prepare($sql);

		$prepare->execute($data); 

		return $prepare->rowCount();		

  } catch (PDOException $e) {
    var_dump($e->getMessage());
  }
}
