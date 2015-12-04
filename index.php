<?php 
  include('config.php');
 ?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="es" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>Music2</title>
<?php include('statics/metas.php'); ?>
</head>
<body>
  <?php include('statics/header.php'); ?>

  <?php 
    switch ($_GET['a']) {
      case 'Inicio':
        include('statics/home.php');
        include('statics/acerca.php');
        include('statics/planes.php');
        include('statics/clientes.php');
        include('statics/trabajos.php');
        include('statics/equipo.php');
        include('statics/contacto.php');


        break;
    }
   ?>
<?php include('statics/footer.php'); ?>
<?php include('statics/copy.php'); ?>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 
<?php include('statics/scripts.php'); ?>
</body>
</html>
