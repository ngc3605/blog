
<div>
	
<a href="add.php">Add new article</a>
<hr>

<? foreach($queryCat as $value) : ?>
	<a href="categories.php?id_cat=<?=$value['id_cat']?>"><?=$value['cat']?></a>
<? endforeach;?>
<? foreach($query as $value) : ?>
	<h2><?=$value['title']?></h2>
	<a href="article.php?id_article=<?=$value['id_article']?>">Read more</a>
<? endforeach;?>
	

</div>