<?php

include_once('core/db.php');
include_once('model/articles.php');

$title = '';
$content = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$title = $_POST['title'];
	$content = $_POST['content'];
	$id_cat = (int)$_POST['id_cat'];
	$fields = ['title' => $title, 'content' => $content, 'id_cat' => $id_cat];
	//valideteArticle($fields);
	var_dump($fields);
	addArticle($fields);
	
} else {

}


include('views/v_addarticle.php');