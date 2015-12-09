<header class="card-panel pink">
    <h3 class="white-text text-center">Brenda Ventolero</h3>
</header>
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="box">
                <a href="<?php echo PATH; ?>panel/track.php" class="waves-effect waves-light purple z-depth-2 btn-large ">Añadir Track</a>
                <a href="<?php echo PATH; ?>panel/album.php" class="waves-effect waves-light purple z-depth-2 btn-large ">Añadir Album</a>
                <a href="<?php echo PATH; ?>panel/artist.php" class="waves-effect waves-light purple z-depth-2 btn-large ">Añadir Artista</a>
                <button class="waves-effect waves-light purple z-depth-2 btn-large modal-trigger" data-target="modal1">Resultados</button>
            </div>
            <?php include('modals.php'); ?>
        </div>
    </div>
</div>