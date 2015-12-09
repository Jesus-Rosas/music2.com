<?php
include 'models.php'; 
if(isset($_POST['id'])){
	$a = Artist::find($_POST['id']);
	$a->Name = $_POST['name'];
	if($a->save()){
		header("Location: "."../index.php?id=".$a->ArtistId);
	}
}
else{
	$a = Artist::create($_POST['name']);
	if($a->save()){
		header("Location: "."../index.php?id=".$a->ArtistId);
	}
}
?>