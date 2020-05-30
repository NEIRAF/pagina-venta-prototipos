<html>
  <head>
    <title>Registrar</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
	maximun-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
    <?php include("Funciones/scrips.php") ?>
  </head>
  <body>
  
	<header class="header">
	   <div class="container">
		<a class="logo">NEIRAF</a>
	   </div>
	   <a class="button" href="index.php">Regresar</a>
	</header>
	
	<main class="main">
    
	<div class="registro">
	<center>
	<h2 class="h2"> Registro </h2>
    <form action="registrar.php" class="form" method="post">
      <p>Nombre: <input type="text" class="field" name="nom" placeholder="Nombre"></p>
      <p>Apellido paterno: <input type="text" class="field" name="apellip" placeholder="Apellido p"></p>
      <p>Apellido materno: <input type="text" class="field" name="apellim" placeholder="Apellido m"></p>
      <p>Fecha de nacimiento: <input type="date" class="field" name="fechN" ></p>
      <p> Genero:<select name="gene" class="field">
        <option selected disabled> Elija una opcion</option>
        <option>Hombre</option>
        <option>Mujer</option>
      </select></p>
      <p>Telefono: <input type="tel" class="field" name="tel" placeholder="Telefono" minlength="10" maxlength="12"></p>
      <p>Email: <input type="email" class="field" name="email" placeholder="Email"></p>
      <p>Domicilio: <input type="text" class="field" name="domi" placeholder="Domicilio"></p>
      <p>Username: <input type="text" class="field" name="user" placeholder="Username" maxlength="15"></p>
      <p>Password: <input type="password" class="field" name="pass" placeholder="Password"></p>
	  <p><input type="submit" class="field" name="Enviar" value="Enviar"></p>
	  
    </form>
	</center>
	</div>
	</main>
	 <footer class="footer">
		<div class="container">
			<p>Pag&iacute;na diseñada por alumnos del 4PAM, Cetis 64</p>
		</div>
	</footer>
    <?php
    if (isset($_POST['Enviar'])) {
      include("conexion.php");
      $nom = $_POST['nom'];
      $apep = $_POST['apellip'];
      $apem = $_POST['apellim'];
      $fech = $_POST['fechN'];
      $gen = $_POST['gene'];
      $tel = $_POST['tel'];
      $corr = $_POST['email'];
      $domi = $_POST['domi'];
      $userN = $_POST['user'];
      $Pass = $_POST['pass'];
      $query_prov = mysqli_query($conn,"SELECT noCuenta FROM user_cet64 where estatus = 1");
      $result_prov = mysqli_num_rows($query_prov);
      $No = $result_prov+1 ;
      $encrip = md5($Pass);

        if((strlen($nom)>0) && (strlen($apep)>0)&&(strlen($apem)>0)&&(strlen($fech)>0)&&(strlen($gen)>0)&&(strlen($tel)>0)&&(strlen($corr)>0)&&(strlen($domi)>0)&&(strlen($userN)>0)&&(strlen($encrip)>0))
        {
          $hrz=0;
          $resultado = mysqli_query($conn, "SELECT * FROM `user_cet64` WHERE noCuenta = '$No'" )  or die ( "Algo ha ido mal en la consulta a la base de datos");
          while ($consu = mysqli_fetch_array( $resultado ))
          {
            echo '<script language="javascript"> alert ("El numero de control existe")</script>';
            $hrz++;
          }
          if($hrz==0)
          {
          $in1 = $conn->query("INSERT INTO `user_cet64` (`noCuenta`, `nombre`, `apelliP`, `apelliM`, `fechNac`, `genero`, `telefono`, `email`, `domicilio`) VALUES('$No','$nom','$apep','$apem','$fech','$gen','$tel','$corr','$domi')");
            if ($in1=true) {
              $in2 = $conn->query("INSERT INTO `pass_cet64` (`userName`, `pass`, `noCuenta`) VALUES('$userN','$encrip','$No')");
              if ($in1 == true && $in2==true) {
                echo '<script language="javascript"> alert ("Se registro correctamente")</script>';
              }else {
                echo '<script language="javascript"> alert ("Algo salio mal")</script>';
              }
            }else {
              echo '<script language="javascript"> alert ("Algo salio mal")</script>';
            }

          }
        }else {
          echo '<script language="javascript"> alert ("Todos los datos debes de ser llenados")</script>';
        }

      include("Cierre_BDD.php");
      }
     ?>
  </body>
</html>
