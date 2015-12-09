<?php 
  include('config.php');
  include ('panel/models.php');
  $track = isset($_GET['id'])? Track::find($_GET['id']) : Track::create(null,null,0,0,0,1);
  $artist = isset($_GET['id'])? Artist::find($_GET['id']) : Artist::create(null);
  $album = isset($_GET['id'])? Album::find($_GET['id']) : Album::create(null,1);
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
  <?php 
    switch ($_GET['a']) {
      case 'Inicio':
        include('panel/admin.php');
        break;
    }
   ?>
<?php include 'footer.php';?>
<?php include('statics/scripts.php'); ?>
</body>
</html>
