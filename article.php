<?php

include_once('model/db.php');
$id_article = $_GET['id_article'];

$sql = "SELECT * FROM article WHERE id_article=".$id_article;
$query = dbQuery($sql);

?>

<div>
	<? foreach($query as $value) : ?>
	<h2><?=$value['title']?></h2>
	<h4><?=$value['content']?></h4>
	<h6><?=$value['dt_creat']?></h6>

<? endforeach;?>
	<h4></h4>
	<a href="delete.php?id_article=<?=$id_article?>">Delete article</a>
<a href="index.php">To main page</a>
</div>
