<?php
include 'models.php';
$track = isset($_GET['id'])? Track::find($_GET['id']) : Track::create(null,null,0,0,0,1);
?>
<!DOCTYPE html>
<html lang="en-mx">
<head>
	<meta charset="UTF-8">
	<title>Track</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" 
	integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" 
	crossorigin="anonymous">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){//objeto jquery → $()
			//$("#form").addClass("has-error");
			$("#name").keyup(function(){
				var vacio = $("#name").val()=="";
				$("#form-name").toggleClass("has-error", vacio);
				$("#form-name").toggleClass("has-success", !vacio);
				$("#btnGuardar").prop("disabled", vacio);
			});
			$("#composer").keyup(function(){
				var vacio = $("#composer").val()=="";
				$("#form-comp").toggleClass("has-error", vacio);
				$("#form-comp").toggleClass("has-success", !vacio);
				$("#btnGuardar").prop("disabled", vacio);
			});

			$("#milliseconds").keyup(function(){
				var vacio = $("#milliseconds").val()<=0;
				$("#form-ms").toggleClass("has-error", vacio);
				$("#form-ms").toggleClass("has-success", !vacio);
				$("#btnGuardar").prop("disabled", vacio);
			});
			$("#bytes").keyup(function(){
				var vacio = $("#bytes").val()<=0;
				$("#form-by").toggleClass("has-error", vacio);
				$("#form-by").toggleClass("has-success", !vacio);
				$("#btnGuardar").prop("disabled", vacio);
			});
			$("#unitprice").keyup(function(){
				var vacio = $("#unitprice").val()<=0;
				$("#form-pr").toggleClass("has-error", vacio);
				$("#form-pr").toggleClass("has-success", !vacio);
				$("#btnGuardar").prop("disabled", vacio);
			});

			$("#milliseconds").change(function(){
				var vacio = $("#milliseconds").val()<=0;
				$("#form-ms").toggleClass("has-error", vacio);
				$("#form-ms").toggleClass("has-success", !vacio);
				$("#btnGuardar").prop("disabled", vacio);
			});
			$("#bytes").change(function(){
				var vacio = $("#bytes").val()<=0;
				$("#form-by").toggleClass("has-error", vacio);
				$("#form-by").toggleClass("has-success", !vacio);
				$("#btnGuardar").prop("disabled", vacio);
			});
			$("#unitprice").change(function(){
				var vacio = $("#unitprice").val()<=0;
				$("#form-pr").toggleClass("has-error", vacio);
				$("#form-pr").toggleClass("has-success", !vacio);
				$("#btnGuardar").prop("disabled", vacio);
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<center><h1>Track</h1></center>
		<hr>
		<form action="guardar_track.php" method="POST">
			<?php if(isset($track->TrackId)):?>
			<div id="form-id" class="form-group">
				<label for="id">Id</label>
				<input type="text"  <?= "value='$track->TrackId'" ?> disabled="disabled" class="form-control" />
				<input type="hidden" id="id" name="id" <?= "value='$track->TrackId'" ?> />
			</div>
				<br />
			<?php endif;?>
			<div id="form-name" class="form-group">
				<label for="name">Nombre</label>
				<input class="form-control" type="text" id="name" name="name" <?= "value='$track->Name'" ?> />
			</div>
			<br />
			<div id="form-album" class="form-group">
				<label for="album">Album</label>
				<select id="album" name="album" class="form-control">
					<?php foreach(Album::all(10000) as $album):?>
				  	<option <?= "value='$album->AlbumId'" ?> 
				  		<?= (isset($track->TrackId)&&($album->AlbumId==$track->Album->AlbumId))?" selected ":""?>><?= $album->Title." (".$album->Artist->Name.")"?>
				  	</option>
				  	<?php endforeach;?>
				</select>
			</div>
			<br />
			<div id="form-comp" class="form-group">
				<label for="composer">Compositor</label>
				<input class="form-control" type="text" id="composer" name="composer" <?= "value='$track->Composer'" ?> />
			</div>
			<br />
			<div id="form-ms" class="form-group">
				<label for="milliseconds">Milisegundos</label>
				<input class="form-control" type="number" id="milliseconds" name="milliseconds" <?= "value='$track->Milliseconds'" ?> />
			</div>
			<br />
			<div id="form-by" class="form-group">
				<label for="bytes">Bytes</label>
				<input class="form-control" type="number" id="bytes" name="bytes" <?= "value='$track->Bytes'" ?> />
			</div>
			<br />
			<div id="form-pr" class="form-group">
				<label for="unitprice">Precio</label>
				<input class="form-control" type="number" id="unitprice" name="unitprice" <?= "value='$track->UnitPrice'" ?> />
			</div>
			<br />
			
			<?php if(isset($track->TrackId)):?>
			<div id="form-id" class="form-group">
				<label for="updated_at">Acutalizado</label>
				<input type="text" id="updated_at" name="updated_at" <?= "value='$track->updated_at'" ?> disabled="disabled" class="form-control"/>
			</div>
				<br />
			<?php endif;?>
			
			<input class="btn btn-default" type="submit" id="btnGuardar" disabled="true" value="Guardar"/>
		</form>
		<br>
		<?php if(isset($track->TrackId)):?>
			<a <?= "href='borrar_track.php?id=$track->TrackId'" ?> class="btn btn-danger" role="button">Borrar</a>
		<?php endif;?>
	</div>
</body>
</html>