<?php 


include_once('model/cat.php');


$id_cat = $_GET['id_cat'];
$query = getAllArticInCat($id_cat);
if($id_cat !== NULL){
	include('views/v_cat.php');
} else {
	include('views/error/v_404.php');
}