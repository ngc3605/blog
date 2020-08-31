<?php

function dbConnect(){
	$db = new PDO('mysql:host=localhost;dbname=articles','root','');
	return $db;
}

function dbQuery(string $sql, array $params = []){
	$db = dbConnect();
	$query = $db->prepare($sql);
	$query->execute($params);
	return $query->fetchAll();

}
