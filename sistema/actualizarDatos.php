<!--Equipo: NEIRAF
	4PAM
	Deanda Vasquez Frida Gallet
	Hernandez Martínez Esmeralda
	Romero Colin Angel Ivan
	Zarza Rangel Naidelyn Enelyi-->
<html>
  <head>
    <title>Actualizar</title>
    <?php include ("Funciones/scrips.php") ?>
    <?php include("cabecera.php") ?>
  </head>
  <body>
    <center>
    <h3 class="dats"> Actualizar Datos </h3>
    <form action="actualizarDatos.php" class="datos" method="post">
      <p>noCuenta: <input type="text" name="nocuenta" placeholder="No Cuenta"></p>
      <?php
      include("Operaciones/conexion.php");
        if (isset($_POST['acr1'])) {
        $no = $_POST['nocuenta'];
        $query_prov = mysqli_query($conn,"SELECT * FROM user_cet64 where noCuenta = '$no'");
        $result_prov = mysqli_num_rows($query_prov);
        if ($result_prov>0) {
          while ($prov = mysqli_fetch_array($query_prov)) {
            ?>
            <p>Nombre: <input type="text" class="field6" name="nom" value="<?php echo $prov['nombre'];?>" ></p>
            <p>Apellido paterno: <input type="text" class="field6" name="apellip" value="<?php echo $prov['apelliP'];?>"></p>
            <p>Apellido materno: <input type="text" class="field6" name="apellim" value="<?php echo $prov['apelliM'];?>"></p>
            <p>Fecha de nacimiento: <input type="date" class="field6" name="fechN" value="<?php echo $prov['fechNac'];?>" ></p>
            <p>Telefono: <input type="tel" name="tel" class="field6" value="<?php echo $prov['telefono'];?>" minlength="10" maxlength="12"></p>
            <p>Email: <input type="email" name="email" class="field6" value="<?php echo $prov['email'];?>"></p>
            <p>Domicilio: <input type="text" name="domi" class="field6" value="<?php echo $prov['domicilio'];?>"></p>
            <?php
          }
        }
        } ?>
      <p><input type="submit" class="field6" name="acr1" value="Enviar">
      <input type="submit" class="field6" name="act1" value="Actualizar"></p>
    </form>
    </center>
    <?php include("Operaciones/func.php"); ?>
  </body>
</html>
