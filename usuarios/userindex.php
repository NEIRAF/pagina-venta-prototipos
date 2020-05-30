<!--Equipo: NEIRAF
	4PAM
	Deanda Vasquez Frida Gallet
	Hernandez Martínez Esmeralda
	Romero Colin Angel Ivan
	Zarza Rangel Naidelyn Enelyi-->
<html>
<head>
	<meta charset="UTF-8">
	<title class="title">Cetis 64</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
	maximun-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
  <?php include ("funciones/scrips.php") ?>
</head>
<body>
	
	<main class="main">
	 <section id="container">
	<div class="header">
<?php include("cabecera.php") ?>
</div>
<div class="cont">
<h1>Bienvenido usuario</h1>
</div>
<div class="salir">
<h1>Presione para salir</h1>
</div>
<div class="catalogo">
<h1>Catalogo</h1>
</div>
<?php

	include("Operaciones/conexion.php");
	$hrz = 0;

	    $resultado = mysqli_query( $conn, "SELECT * FROM `prod_cet64`" )  or die ( "Algo ha ido mal en la consulta a la base de datos");
	    while ($consu = mysqli_fetch_array( $resultado ))
	    {
	      ?>
		  <div class="main-container">
	      <center><table border cellpadding=9 cellspacing=0>
				  <tr>
	              <th>Nombre del producto</th><th>Descripcion</th><th>Precio</th><th>Foto</th><th>Cantidad</th>
				  <tr>
	              <tr>
	              <td><?php echo $consu['nombre_prod'];?></td>
	              <td><?php echo $consu['descrip_prod'];?></td>
	              <td><?php echo $consu['prec_prod'];?></td>
	              <td><?php echo $consu['foto_pro'];?></td>
	              <td><form action="userindex.php" method="post">
									<input type="number" name="cantidad"></td>
									<td><input type="submit" class="añadir" name="enviarcrr" value="Añadir"></td>
	              </tr>
	        </center></table>
			</div>
	              <?php
	            $hrz++;
	    }

	    if($hrz==0)
	    {
	        echo '<script language="javascript"> alert ("El Producto no existe")</script>';
	    }


 ?>
	 </section>
	</main>
	<footer class="footer">
		<div class="container">
			<p>Pag&iacute;na diseñada por alumnos del 4PAM, Cetis 64</p>
		</div>
	</footer>
</body>
</html>
