<table class="centered responsive-table striped">
    <tr>
        <th class="text-center">Nombre</th>
        <th class="text-center">Album</th>
        <th class="text-center">Artista</th>
        <th class="text-center">Duracion</th>
        <th class="text-center">Tama&ntilde;o</th>
        <th></th>
    </tr>
    <?php foreach (Track::all(10000) as $track): ?>
        <tr>
            <td><a <?= "href=panel/track.php?id='" . $track->TrackId . "'" ?> class="indigo-text text-darken-4"><?= $track->Name ?></a></td>
            <td><a <?= "href=panel/album.php?id='" . $track->Album->AlbumId . "'" ?> class="teal-text text-lighten-1"><?= $track->Album->Title ?></a></th>
            <td><a <?= "href=panel/artist.php?id='" . $track->Album->Artist->ArtistId . "'" ?>><?= $track->Album->Artist->Name ?></a></td>
            <td class="orange-text"><?= $track->Milliseconds / 60000 ?></td>
            <td class="grey-text"><?= $track->Bytes / 1000000 ?></td>
            <td><a <?= "href=panel/borrar_track.php?id='" . $track->TrackId . "'" ?> id="btn-delete" class="red-text"> <i class="small material-icons">delete</i></a></td>
        </tr>
    <?php endforeach; ?>
</table>