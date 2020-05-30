<!--Equipo: NEIRAF
	4PAM
	Deanda Vasquez Frida Gallet
	Hernandez Martínez Esmeralda
	Romero Colin Angel Ivan
	Zarza Rangel Naidelyn Enelyi-->
<html>
  <head>
    <title>Actualizar Datos</title>
    <?php include ("Funciones/scrips.php") ?>
  </head>
  <body>
    <a class="button1" href="userindex.php">Regresar</a>
    <center>
    <h3 class="h3"> Actualizar Datos </h3>
	<div class="registro">
    <form action="actuUsuario.php" class="form" method="post">
      <p>No cuenta: <input type="text" class="field" name="nocuenta" placeholder="No cuenta"></p>
      <p>Nombre: <input type="text" class="field" name="nom" placeholder="Nombre" ></p>
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
      <p><input type="submit" class="field" name="Actualizar" value="Actualizar"><input type="submit" class="field" value="consulta" name="consu"></p>
    </form>
	</div>
    </center>
    <?php
    if (isset($_POST['Actualizar'])) {
      include("Operaciones/conexion.php");
      include("Operaciones/actualizar.php");
      include("Operaciones/Cierre_BDD.php");
      }
      if (isset($_POST['consu'])) {
        include("Operaciones/conexion.php");
        include("Operaciones/consultar.php");
        include("Operaciones/Cierre_BDD.php");
        }
     ?>
  </body>
</html>
