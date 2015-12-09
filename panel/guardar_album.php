<?php
include 'models.php'; 
if(isset($_POST['id'])){
	$a = Album::find($_POST['id']);
	$a->Title = $_POST['title'];
	$a->Artist = intval($_POST['artist']);
	if($a->save()){
		header("Location: "."../index.php?id=".$a->AlbumId);
	}
}
else{
	$a = Album::create($_POST['title'],intval($_POST['artist']));
	if($a->save()){
		header("Location: "."../index.php?id=".$a->AlbumId);
	}
}
?>