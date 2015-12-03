<?php
include 'models.php';
?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="UTF-8">
	<title>Tracks</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" 
	integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" 
	crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<hr>
		<a href="track.php" class="btn btn-info" role="button">Nuevo Track</a>
		<a href="album.php" class="btn btn-info" role="button">Nuevo Album</a>
		<a href="artist.php" class="btn btn-info" role="button">Nuevo Artista</a>
		<hr>
		<br>
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
</body>
</html>