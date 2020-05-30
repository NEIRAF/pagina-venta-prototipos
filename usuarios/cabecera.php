<!--Equipo: NEIRAF
	4PAM
	Deanda Vasquez Frida Gallet
	Hernandez Martínez Esmeralda
	Romero Colin Angel Ivan
	Zarza Rangel Naidelyn Enelyi-->
<?php
session_start();
if (empty($_SESSION['active']))
{
	header('location: ../');
}
 ?>
<header class="header">
	<div class="container login">
		<a class="logo">"NEIRAF"</a></br>
		<h2 class="h2">Cetis 64</h2></br>
			<p class="p"> Mexico, <?php echo datef() ?></p>
	</div>
		<img class="photouser" src="img/img1.png" alt="Usuario">
		<a href="cerrarSesion.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
		<a href="actuUsuario.php" class="button">Actualizar datos</a>
</header>
	