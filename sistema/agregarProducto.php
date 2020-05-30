<!--Equipo: NEIRAF
	4PAM
	Deanda Vasquez Frida Gallet
	Hernandez Martínez Esmeralda
	Romero Colin Angel Ivan
	Zarza Rangel Naidelyn Enelyi-->
<html>
  <head>
    <title>agregarProducto</title>
    <?php include("Funciones/scrips.php"); ?>
    <?php include("cabecera.php") ?>
  </head>
  <body>

    <center>
    <h3 class="product"> agregarProducto </h3>

    <form action="agregarProducto.php" class="producto" method="post">
      <label for="proveedor" class="field3">Proveedor</label>
      <?php
      include("Operaciones/conexion.php");
      $query_prov = mysqli_query($conn,"SELECT id_proo,nombre FROM proo_cet64 where estatus = 1");
      $result_prov = mysqli_num_rows($query_prov);
       ?>
      <select name="prov" class="field3" id="prov">
        <?php
        if ($result_prov>0) {
          while ($prov = mysqli_fetch_array($query_prov)) {
         ?>
        <option value="<?php echo $prov['id_proo'];?>" class="field3"> <?php echo $prov['nombre']; ?> </option>
      <?php
      }
    }
    include("Operaciones/Cierre_BDD.php");?>
    </select>
      <p><label for="producto" class="field4"> Producto</label>
      <input type="text" class="field4" name="producto" placeholder="Nombre del Producto"></p>
      <p><label for="des" class="field4">Descripcion</label>
        <input type="text" class="field4" name="Descripcion" placeholder="Descripcion"></p>
      <p><label for="precio" class="field4"> Precio </label>
      <input type="number" class="field4" name="precio" placeholder="Precio del producto"></p>
      <p><label for="cantidad" class="field4">Cantidad</label>
      <input type="number" class="field4" name="cantidad" placeholder="Cantidad del producto"></p>
      <p>
        <div class="field4">
	       <label for="foto">Foto</label>
        </div>
        <div class="field4">
        <input type="file" name="foto" id="foto">
        </div>
      </p>
      <p><input type="submit" class="field4" name="Enviarp" value="Enviar"></p>
    </form>
    </center>
    <?php
    include("Operaciones/func.php");
     ?>
  </body>
</html>
