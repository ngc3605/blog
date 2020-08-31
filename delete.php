<?php 

include_once('core/db.php');
include_once('model/articles.php');

$id_article = $_GET['id_article'];
deleteArticle($id_article);
header('Location: index.php');
?>




