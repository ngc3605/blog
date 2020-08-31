<?php


include_once('core/db.php');

function getAllArticInCat(int $id_cat){
	$sql = "SELECT * FROM article WHERE id_cat=:id_cat";
	$fields = ['id_cat' => $id_cat];

	$query = dbQuery($sql, $fields);

	return $query;

}

function getCat(){
	$sql = "SELECT * FROM categoties";
	$params = ['cat' => ''];
	$query = dbQuery($sql, $params);
	return $query;
}