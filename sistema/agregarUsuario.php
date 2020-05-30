<!--Equipo: NEIRAF
	4PAM
	Deanda Vasquez Frida Gallet
	Hernandez Martínez Esmeralda
	Romero Colin Angel Ivan
	Zarza Rangel Naidelyn Enelyi-->
<html>
  <head>
    <title>agregarUsuario</title>
    <?php include ("Funciones/scrips.php") ?>
    <?php include("cabecera.php") ?>
  </head>
  <body>

    <center>
    <h3 class="title"> agregarUsuario </h3>
    <form action="agregarUsuario.php" class="form" method="post">

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
      <p>Rol: <select name="rol" class="field">
        <option selected disabled> Elija una opcion</option>
        <option value="1">Administrador</option>
        <option value="0">Usuario</option>
      </select>
      <p><input type="submit" class="field" name="EnviarU" value="Enviar"></p>
    </form>
    </center>
    <?php

      include("Operaciones/func.php");

     ?>
  </body>
</html>
