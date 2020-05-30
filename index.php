<!--Equipo: NEIRAF
	4PAM
	Deanda Vasquez Frida Gallet
	Hernandez Martínez Esmeralda
	Romero Colin Angel Ivan
	Zarza Rangel Naidelyn Enelyi-->
<?php
$alert = '';
session_start();
if (!empty($_SESSION['active'])) {
  header('location: sistema/');
}else{
  if (!empty($_POST)) {
    if (empty($_POST['usuario']) || empty($_POST['clave'])) {
      echo $alert="Ingrese su usuario y su clave";
    }else {
      require_once "conexion.php";
      $user = $_POST['usuario'];
      $pass = $_POST['clave'];
      $encrip = md5($pass);
      $query = mysqli_query($conn,"SELECT * FROM pass_cet64 where userName='$user' and pass ='$encrip' ");
      $result = mysqli_num_rows($query);
      if ($result>0) {
          $data = mysqli_fetch_array($query);
          $_SESSION['rol']= $data['rol'];
          if ($_SESSION['rol']==1) {
          $_SESSION['active']= true;
          $_SESSION['user']= $data['userName'];
            header("location: sistema/");
          }
          else {
            $_SESSION['active']= true;
            $_SESSION['user']= $data['userName'];
              header("location: usuarios/userindex.php");
          }

      }else {
        $alert = 'El usuario o clave son incorrectos';
        session_destroy();
      }

    }
  }
}

 ?>
<html>
<head>
  <title> login </title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
  maximun-scale=1.0, minimun-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<header class="header">
	   <div class="container">
		<a class="logo">NEIRAF</a>
	   </div>
	</header>
	<main class="main">
	 <section id="container">
		<div class="cont">
		<h3>Bienvenido</h3>
		</div>
		<img src="img/img1.png" class="img" alt="Login">
		
		<div class="login">
		<form class="form" action="" method="post">
		  <h2 class="h2"> Iniciar sesion </h2>
		  <input type="text" name="usuario" class="input" placeholder="&#128100; Usuario">
		  <input type="password" name="clave" class="input" placeholder="&#128272; Contraseña">
		  <div class="alert"><?php echo isset($alert) ? $alert:'';?></div>
		  <input type="submit" value="Entrar" class="input">
		 </form>
		 </div>
		<div class="pregunta">¿No tienes cuenta?<a class="link" href="registrar.php"></br> Registrate </a></div>
	  </section>
	</main>
	<footer class="footer">
		<div class="container">
			<p>Pag&iacute;na diseñada por alumnos del 4PAM, Cetis 64</p>
		</div>
	</footer>
		
</body>
</html>
