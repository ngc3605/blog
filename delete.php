<?php 

include_once('model/db.php');

$id_article = $_GET['id_article'];
$fields = ['id_article' => $id_article];
$sql = "DELETE FROM article WHERE id_article=:id_article";

dbQuery($sql, $fields);
header('Location: index.php');
?>




