<?php

include_once('core/db.php');
include_once('model/articles.php');
include_once('model/cat.php');

$queryCat = getCat();

$query = getArticles();



include('views/v_index.php');