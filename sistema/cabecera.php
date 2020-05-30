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
<header>
	<div class="header">
		<a class="logo">NEIRAF</a>
		<h2 class="h2">Cetis 64</h2>
			<p class="p"> Mexico, <?php echo datef() ?></p>
			<img class="photouser" src="img/img1.png" alt="Usuario">
			<a href="cerrarSesion.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
	</div>
	<div id="menu">
		<ul>
			<li id="item"><a href="index.php"> Inicio</a></li>
			<li id="item"><a>Usuarios</a>
					<ul id="desple">
						<li><a href="agregarUsuario.php">Ingresar usuario</a></li>
						<li><a href="eliminarUsuario.php">Eliminar usuarios</a></li>
						<li><a href="actualizarUsuario.php">Actualizar Rol</a></li>
						<li><a href="actualizarDatos.php">Actualizar Datos</a></li>
					</ul>
					
			</li>
			<li id="item"><a>Consulta</a>
					<ul id="desple">
						<li><a href="consultarUsuario.php">Consultar Usuarios</a></li>
					</ul>
			</li>
			<li id="item"><a>Proveedores</a>
					<ul id="desple">
						<li><a href="agregarProv.php"> Agregar Proveedor</a></li>
					</ul>
			</li>
			<li id="item"><a>Productos</a>
					<ul id="desple">
						<li><a href="agregarProducto.php">Agregar Producto</a><br></li>
					</ul>
			</li>					
		</ul>
	 </div>
</header>

