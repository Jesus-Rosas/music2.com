<?php include('../config.php'); ?>
<?php  include('signin.php');?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Iniciar Sesión</title>
 	<link rel="stylesheet" href="<?php echo PATH; ?>css/bootstrap.min.css">
 	<link rel="stylesheet" href="<?php echo PATH; ?>css/signin.css">
 </head>
 <body>
 	<div class="container">
      <form class="form-signin" action="signin.php" method="POST">
        <h2 class="form-signin-heading text-center">Iniciar Sesión</h2>
        <label for="inputEmail" class="sr-only">Usuario o E-mail</label>
        <input type="email" name="user"id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">COntraseña</label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recuerdame
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
      </form>

    </div> <!-- /container -->
 </body>
 </html>