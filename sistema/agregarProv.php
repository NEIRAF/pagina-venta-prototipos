<!--Equipo: NEIRAF
	4PAM
	Deanda Vasquez Frida Gallet
	Hernandez Martínez Esmeralda
	Romero Colin Angel Ivan
	Zarza Rangel Naidelyn Enelyi-->
<html>
  <head>
    <title>agregarProveedor</title>
    <?php include("Funciones/scrips.php"); ?>
    <?php include("cabecera.php") ?>
  </head>
  <body>
    <center>
    <h3 class="provider"> agregarProveedor </h3>

    <form action="agregarProv.php" class="provedor" method="post">
      <p><label for="nombre" class="field3">Nombre de la empresa</label>
      <input type="text" class="field3" name="nombre" placeholder="Nombre"></p>
      <p><label for="noCuenta" class="field3">Numero de cuenta</label>
      <?php
      include("Operaciones/conexion.php");
      $query_prov = mysqli_query($conn,"SELECT noCuenta,nombre FROM user_cet64 where estatus = 1");
      $result_prov = mysqli_num_rows($query_prov);
       ?>
      <select name="nocuenta" class="field3" id="prov">
        <?php
        if ($result_prov>0) {
          while ($prov = mysqli_fetch_array($query_prov)) {
         ?>
        <option value="<?php echo $prov['noCuenta'];?>" class="field3"> <?php echo $prov['noCuenta']."-".$prov['nombre']; ?> </option>
      <?php
      }
    }
    include("Operaciones/Cierre_BDD.php");?>
    </select>
      <p><input type="submit" class="field3" name="Enviarpr" value="Enviar"></p>
    </form>
    </center>
    <?php
    include("Operaciones/func.php");
     ?>
  </body>
</html>
