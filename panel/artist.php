<?php
	include 'models.php';
	$artist = isset($_GET['id'])? Artist::find($_GET['id']) : Artist::create(null);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artista</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" 
	integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" 
	crossorigin="anonymous">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){//objeto jquery → $()
			//$("#form").addClass("has-error");
			$("#name").keyup(function(){
				var vacio = $("#name").val()=="";
				$("#form").toggleClass("has-error", vacio);
				$("#form").toggleClass("has-success", !vacio);
				$("#btnGuardar").prop("disabled", vacio);
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<center><h1>Artista</h1></center>
		<hr>
		<form action="guardar_artist.php" method="POST">
			<?php if(isset($artist->ArtistId)):?>
			<div id="form-id" class="form-group">
				<label for="id">Id</label>
				<input type="text"  <?= "value='$artist->ArtistId'" ?> disabled="disabled" class="form-control" />
				<input type="hidden" id="id" name="id" <?= "value='$artist->ArtistId'" ?> />
			</div>
				<br />
			<?php endif;?>
			
			<div id="form" class="form-group">
				<label for="name">Nombre</label>
				<input class="form-control" type="text" id="name" name="name" <?= "value='$artist->Name'" ?> />
			</div>
			<br />

			<?php if(isset($artist->ArtistId)):?>
			<div id="form-id" class="form-group">
				<label for="updated_at">Acutalizado</label>
				<input type="text" id="updated_at" name="updated_at" <?= "value='$artist->updated_at'" ?> disabled="disabled" class="form-control"/>
			</div>
				<br />
			<?php endif;?>
			
			<input class="btn btn-default" type="submit" id="btnGuardar" disabled="true" value="Guardar"/>
		</form>
		<br>
		<?php if(isset($artist->ArtistId)):?>
			<a <?= "href='borrar_artist.php?id=$artist->ArtistId'" ?> class="btn btn-danger" role="button">Borrar</a>
		<?php endif;?>
	</div>
</body>
</html>