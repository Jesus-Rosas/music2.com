<?php
	include 'models.php';
	$album = isset($_GET['id'])? Album::find($_GET['id']) : Album::create(null,1);
?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="UTF-8">
	<title>Album</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" 
	integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" 
	crossorigin="anonymous">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){//objeto jquery → $()
			//$("#form").addClass("has-error");
			$("#title").keyup(function(){
				var vacio = $("#title").val()=="";
				$("#form").toggleClass("has-error", vacio);
				$("#form").toggleClass("has-success", !vacio);
				$("#btnGuardar").prop("disabled", vacio);
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<center><h1>Album</h1></center>
		<hr>
		<form action="guardar_album.php" method="POST">
			<?php if(isset($album->AlbumId)):?>
			<div id="form-id" class="form-group">
				<label for="id">Id</label>
				<input type="text"  <?= "value='$album->AlbumId'" ?> disabled="disabled" class="form-control"/>
				<input type="hidden" id="id" name="id" <?= "value='$album->AlbumId'" ?> />
			</div>
				<br />
			<?php endif;?>
			<div id="form" class="form-group">
				<label for="title">Titulo</label>
				<input class="form-control" type="text" id="title" name="title" <?= "value='$album->Title'" ?> />
			</div>
			<br />
			<div id="form" class="form-group">
				<label for="artist">Artista</label>
				<select id="artist" name="artist" class="form-control">
					<?php foreach(Artist::all(10000) as $artist):?>
				  	<option <?= "value='$artist->ArtistId'" ?> <?= (isset($album->AlbumId)&&($artist->ArtistId==$album->Artist->ArtistId))?" selected ":""?>><?= $artist->Name?></option>
				  	<?php endforeach;?>
				</select>
			</div>
			<br />
			<?php if(isset($album->AlbumId)):?>
			<div id="form-id" class="form-group">
				<label for="updated_at">Acutalizado</label>
				<input type="text" id="updated_at" name="updated_at" <?= "value='$album->updated_at'" ?> disabled="disabled" class="form-control"/>
			</div>
				<br />
			<?php endif;?>
			
			<input class="btn btn-default" type="submit" id="btnGuardar" disabled="true" value="Guardar"/>
		</form>
		<br>
		<?php if(isset($album->AlbumId)):?>
			<a <?= "href='borrar_album.php?id=$album->AlbumId'" ?> class="btn btn-danger" role="button">Borrar</a>
		<?php endif;?>
	</div>
</body>
</html>