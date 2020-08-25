<?php

include_once('model/db.php');
$sql = "SELECT * FROM article";
$params = ['title' => '', 'content' => '', 'dt_creat' => ''];
$query = dbQuery($sql, $params);

?>

<div>
	
<a href="add.php">Add new article</a>
<hr>

<? foreach($query as $value) : ?>
	<h2><?=$value['title']?></h2>
	<a href="article.php?id_article=<?=$value['id_article']?>">Read more</a>
<? endforeach;?>
	

</div>