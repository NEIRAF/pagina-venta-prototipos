<!--Equipo: NEIRAF
	4PAM
	Deanda Vasquez Frida Gallet
	Hernandez Martínez Esmeralda
	Romero Colin Angel Ivan
	Zarza Rangel Naidelyn Enelyi-->
<html>
  <head>
    <title>actualizarRol</title>
    <?php include ("Funciones/scrips.php") ?>
    <?php include("cabecera.php") ?>
  </head>
  <body>

    <center>
    <h3 class="actual"> actualizarRol </h3>
    <form action="actualizarUsuario.php" class="actualiza" method="post">
      <p>No cuenta: <input type="text" class="field5" name="nocuenta" placeholder="No cuenta"></p>
      <p>Rol: <select name="rol" class="field5">
        <option selected disabled> Elija una opcion</option>
        <option value="1">Administrador</option>
        <option value="0">Usuario</option>
      </select>
      <P><input type="submit" class="field5" value="actualizar" name="act"><input type="submit" class="field5" value="consulta" name="consu"></p>
    </form>
  </center>
  <?php
    include("Operaciones/func.php");
   ?>
</body>
</html>
