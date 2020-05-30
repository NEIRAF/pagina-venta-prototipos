<!--Equipo: NEIRAF
	4PAM
	Deanda Vasquez Frida Gallet
	Hernandez Martínez Esmeralda
	Romero Colin Angel Ivan
	Zarza Rangel Naidelyn Enelyi-->
<html>
  <head>
    <title>consultarUsuario</title>
    <?php include ("Funciones/scrips.php") ?>
    <?php include("cabecera.php") ?>
  </head>
  <body>
    <a href="agregarUsuario.php">Nuevo usuario</a>
    <center>
    <h3 class="consult"> consultarUsuario </h3>
    <form action="consultarUsuario.php" class="consultar" method="post">
      <p>No cuenta: <input type="text" class="field2" name="nocuenta" placeholder="No cuenta"></p>
      <P><input type="submit" class="field2" value="consulta" name="consu"></p>
    </form>
  </center>
  <?php
    include("Operaciones/func.php");
   ?>
</body>
</html>
