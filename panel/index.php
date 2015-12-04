<?php
include 'models.php';
?>
<?php include('../config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Tracks</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" 
	integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" 
	crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo PATH; ?>css/styles.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center">Panel de Administraci&oacute;n</h3>
				<div class="buttons-crud">
					<a href="track.php" class="btn btn-info" role="button">Nuevo Track</a>
					<a href="album.php" class="btn btn-info" role="button">Nuevo Album</a>
					<a href="artist.php" class="btn btn-info" role="button">Nuevo Artista</a>
				</div>
			</div>
			<div class="col-md-12">
				<table class="table table-striped">
					<tr>
						<th>Nombre</th>
						<th>Album</th>
						<th>Artista</th>
						<th>Duracion</th>
						<th>Tamaño</th>
						<th></th>
					</tr>
					<?php foreach (Track::all(1000) as $track):?>
					<tr>
						<td><a <?= "href=track.php?id='".$track->TrackId."'" ?>><?= $track->Name?></a></td>
						<td><a <?= "href=album.php?id='".$track->Album->AlbumId."'" ?>><?= $track->Album->Title?></a></th>
						<td><a <?= "href=artist.php?id='".$track->Album->Artist->ArtistId."'" ?>><?= $track->Album->Artist->Name?></a></td>
						<td><?= $track->Milliseconds/60000?></td>
						<td><?= $track->Bytes/1000000?></td>
						<td><a <?= "href=borrar_track.php?id='".$track->TrackId."'" ?>><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
					</tr>
					<?php endforeach; ?>
				</table>
				
			</div>
		</div>
	</div>
</body>
</html>