<!--Equipo: NEIRAF
	4PAM
	Deanda Vasquez Frida Gallet
	Hernandez Martínez Esmeralda
	Romero Colin Angel Ivan
	Zarza Rangel Naidelyn Enelyi-->
<html>
  <head>
    <title>eliminarUsuario</title>
    <?php include ("Funciones/scrips.php") ?>
    <?php include("cabecera.php") ?>
  </head>
  <body>

    <center>
    <h3 class="remove"> eliminarUsuario </h3>
    <form action="eliminarUsuario.php" class="eliminar" method="post">
      <p>No cuenta: <input type="text" class="field1" name="nocuenta" placeholder="No cuenta"></p>
      <P><input type="submit" class="field1" value="eliminar" name="elim"><input type="submit" class="field1" value="consulta" name="consu"></p>
    </form>
  </center>
  <?php
include("Operaciones/func.php")
   ?>
</body>
</html>
