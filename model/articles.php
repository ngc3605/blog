<?php

include_once('core/db.php');

function getArticle(int $id_article){
	$fields = ['id_article' => $id_article];
	$sql = "SELECT * FROM article JOIN categoties ON article.id_cat=categoties.id_cat WHERE id_article=:id_article";
	$query = dbQuery($sql, $fields);
	return $query;
}


function getArticles(){
	$sql = "SELECT * FROM article";
	$params = ['title' => '', 'content' => '', 'dt_creat' => '', 'id_cat' => ''];
	$query = dbQuery($sql, $params);
	return $query;
}

function addArticle(array $fields){
	
	$sql = "INSERT INTO article (title, content, id_cat) VALUES (:title, :content, :id_cat)";

	dbQuery($sql, $fields);
}

function deleteArticle($id_article){
	$fields = ['id_article' => $id_article];
	$sql = "DELETE FROM article WHERE id_article=:id_article";
	dbQuery($sql, $fields);
}

function validateArticle(){
	
}