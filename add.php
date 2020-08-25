<?php

include_once('model/db.php');

$title = '';
$content = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$title = $_POST['title'];
	$content = $_POST['content'];
	$fields = ['title' => $title, 'content' => $content];
	$sql = "INSERT INTO article (title, content) VALUES (:title, :content)";
	dbQuery($sql, $fields);
} else {

}

?>


<form action="" method="POST">
	Title: <input type="text" name="title"><hr>
	Content: <textarea name="content" cols="30" rows="10"></textarea><hr>
	<button>Add article</button>

</form>
<hr>
<a href="index.php">To main page</a>