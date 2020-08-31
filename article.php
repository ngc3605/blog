<?php

include_once('core/db.php');
include_once('model/articles.php');
$id_article = $_GET['id_article'];
$query = getArticle($id_article);




include('views/v_article.php');
