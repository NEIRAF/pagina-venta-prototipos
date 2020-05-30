<?php
include("Operaciones/conexion.php");
//Actualizacion de Rol
if(isset($_POST['act'])) {
$No = $_POST['nocuenta'];
$rol = $_POST['rol'];

if($No=="")
{
    echo '<script language="javascript"> alert ("El numero de control es obligatorio")</script>';
}else
{
  //consulta para verificar la existencia del numero de control
  $hrz=0;
   $resultado = mysqli_query( $conn, "SELECT * FROM `pass_cet64` WHERE noCuenta = '$No'" )  or die ( "Algo ha ido mal en la consulta a la base de datos");
   while ($consu = mysqli_fetch_array( $resultado ))
   {
       $hrz++;
   }
   if($hrz==0)
   {
         echo '<script language="javascript"> alert ("El numero de control no existe")</script>';
   }else
   {
     if((strlen($No)>0)&&(strlen($rol)>0))
     {
     //actualizacion de datos (UPDATE)
       $_UPDATE_SQL="UPDATE `pass_cet64` Set rol='$rol' WHERE noCuenta='$No'";
       mysqli_query($conn,$_UPDATE_SQL);
       echo '<script language="javascript"> alert ("Se realizo la actualizacion")</script>';
     }else {
       echo '<script language="javascript"> alert ("Todos los datos debes de ser llenados")</script>';
     }
   }
}
}
//consulta de datos
if (isset($_POST['consu'])) {
  $No = $_POST['nocuenta'];
  $hrz = 0;

      $resultado = mysqli_query( $conn, "SELECT * FROM `user_cet64` WHERE noCuenta = '$No'" )  or die ( "Algo ha ido mal en la consulta a la base de datos");
      $resultado1 = mysqli_query($conn,"SELECT * FROM `pass_cet64` WHERE noCuenta = '$No'  " )  or die ( "Algo ha ido mal en la consulta a la base de datos");
      while ($consu = mysqli_fetch_array( $resultado ) and $consul = mysqli_fetch_array( $resultado1 ))
      {
        ?>
        <center><table border cellpadding=9 cellspacing=0>
                <tr>
                <th>No de Control</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Fecha de Nacimiento </th><th> Genero</th><th>Telefono</th><th>Correo</th><th>Domicilio</th><th>User Name</th><th>No Cuenta</th><th>Rol</th>
                </tr>
                <tr>
                <td><?php echo $consu['noCuenta'];?></td>
                <td><?php echo $consu['nombre'];?></td>
                <td><?php echo $consu['apelliP'];?></td>
                <td><?php echo $consu['apelliM'];?></td>
                <td><?php echo $consu['fechNac'];?></td>
                <td><?php echo $consu['genero'];?></td>
                <td><?php echo $consu['telefono'];?></td>
                <td><?php echo $consu['email'];?></td>
                <td><?php echo $consu['domicilio'];?></td>
                <td><?php echo $consul['userName'];?></td>
                <td><?php echo $consul['noCuenta'];?></td>
                <td><?php echo $consul['rol'];?></td>
                <td><a href="actualizarDatos.php">Editar</a> <a href="eliminarUsuario.php">Eliminar</a></td>
                </tr>
                </table>
                </center>
                <?php
              $hrz++;
      }

      if($hrz==0)
      {
          echo '<script language="javascript"> alert ("El numero de control no existe")</script>';
      }

  }
  //Registro de productos
  if (isset($_POST['Enviarp'])) {
    $prov = $_POST['prov'];
    $pro = $_POST['producto'];
    $desc = $_POST['Descripcion'];
    $precio = $_POST['precio'];
    $cant = $_POST['cantidad'];
    $foto = $_POST['foto'];
      if((strlen($prov)>0) && (strlen($pro)>0)&&(strlen($desc)>0)&&(strlen($precio)>0)&&(strlen($cant)>0)&&(strlen($foto)>0))
      {
        $hrz=0;
        $resultado = mysqli_query($conn, "SELECT * FROM `prod_cet64` WHERE nombre_prod = '$pro'" )  or die ( "Algo ha ido mal en la consulta a la base de datos");
        while ($consu = mysqli_fetch_array( $resultado ))
        {
          echo '<script language="javascript"> alert ("El producto existe")</script>';
          $hrz++;
        }
        if($hrz==0)
        {
        $in1 = $conn->query("INSERT INTO `prod_cet64` (`nombre_prod`, `descrip_prod`, `cant_prod`, `prec_prod`, `foto_pro`, `id_proo`) VALUES('$pro','$desc','$cant','$precio','$foto','$prov')");
              echo '<script language="javascript"> alert ("Se registro correctamente")</script>';
        }
      }else {
        echo '<script language="javascript"> alert ("Todos los datos debes de ser llenados")</script>';
      }
    }
    //registro de usuarios
    if (isset($_POST['EnviarU'])) {
      $nom = $_POST['nom'];
      $apep = $_POST['apellip'];
      $apem = $_POST['apellim'];
      $fech = $_POST['fechN'];
      $gen = $_POST['gene'];
      $tel = $_POST['tel'];
      $corr = $_POST['email'];
      $domi = $_POST['domi'];
      $userN = $_POST['user'];
      $Pass = $_POST['pass'];
      $rol = $_POST['rol'];
      $query = mysqli_query($conn,"SELECT noCuenta FROM user_cet64 where estatus = 1");
      $result = mysqli_num_rows($query);
      $No = $result+1 ;
      $encrip = md5($Pass);
      if($No=="")
      {
        echo '<script language="javascript"> alert ("El numero de control es obligatorio")</script>';
      }else
      {
        if((strlen($nom)>0) && (strlen($apep)>0)&&(strlen($apem)>0)&&(strlen($fech)>0)&&(strlen($gen)>0)&&(strlen($tel)>0)&&(strlen($corr)>0)&&(strlen($domi)>0)&&(strlen($userN)>0)&&(strlen($encrip)>0)&&(strlen($rol)>0))
        {
          $hrz=0;
          $resultado = mysqli_query($conn, "SELECT * FROM `user_cet64` WHERE noCuenta = '$No'" )  or die ( "Algo ha ido mal en la consulta a la base de datos");
          while ($consu = mysqli_fetch_array( $resultado ))
          {
            echo '<script language="javascript"> alert ("El numero de control existe")</script>';
            $hrz++;
          }
          if($hrz==0)
          {
          $in1 = $conn->query("INSERT INTO `user_cet64` (`noCuenta`, `nombre`, `apelliP`, `apelliM`, `fechNac`, `genero`, `telefono`, `email`, `domicilio`) VALUES('$No','$nom','$apep','$apem','$fech','$gen','$tel','$corr','$domi')");
            if ($in1=true) {
              $in2 = $conn->query("INSERT INTO `pass_cet64` (`userName`, `pass`, `noCuenta`, `rol`) VALUES('$userN','$encrip','$No','$rol')");
              if ($in1 == true && $in2==true) {
                echo '<script language="javascript"> alert ("Se registro correctamente")</script>';
              }else {
                echo '<script language="javascript"> alert ("Algo salio mal")</script>';
              }
            }else {
              echo '<script language="javascript"> alert ("Algo salio mal")</script>';
            }

          }
        }else {
          echo '<script language="javascript"> alert ("Todos los datos debes de ser llenados")</script>';
        }
       }
      }
      //eliminacion de usuarios
      if (isset($_POST['elim'])) {
        $No = $_POST['nocuenta'];
        if($No=="")
        {
              echo '<script language="javascript"> alert ("El numero de control es obligatorio")</script>';
        }else
        {
            $hrz=0;
            $resultado = mysqli_query( $conn, "SELECT * FROM `user_cet64` WHERE noCuenta = '$No'" )  or die ( "Algo ha ido mal en la consulta a la base de datos");
            while ($consu = mysqli_fetch_array( $resultado ))
            {
                $hrz++;
            }
            if($hrz==0)
            {
              echo '<script language="javascript"> alert ("El numero de control no existe")</script>';
            }else
            {
              //eliminacion de datos (DELETE)
                $_DELETE_SQL = "DELETE FROM `user_cet64` WHERE noCuenta = '$No'";
        	   mysqli_query($conn,$_DELETE_SQL);
                echo '<script language="javascript"> alert ("El registro se elimino con exito")</script>';
            }
        }
        }
        if (isset($_POST['Enviarpr'])) {
          $nom = $_POST['nombre'];
          $No = $_POST['nocuenta'];
          $in1 = $conn->query("INSERT INTO `proo_cet64` (`nombre`, `noCuenta`) VALUES('$nom','$No')");
                echo '<script language="javascript"> alert ("Se registro correctamente")</script>';
        }
        //Actualizar Datos

        if (isset($_POST['act1'])) {
          $No = $_POST['nocuenta'];
          $nom = $_POST['nom'];
          $apep = $_POST['apellip'];
          $apem = $_POST['apellim'];
          $fech = $_POST['fechN'];
          $tel = $_POST['tel'];
          $corr = $_POST['email'];
          $domi = $_POST['domi'];

          if($No=="")
          {
              echo '<script language="javascript"> alert ("El numero de control es obligatorio")</script>';
          }else
          {
            //consulta para verificar la existencia del numero de control
            $hrz=0;
             $resultado = mysqli_query( $conn, "SELECT * FROM `user_cet64` WHERE noCuenta = '$No'" )  or die ( "Algo ha ido mal en la consulta a la base de datos");
             while ($consu = mysqli_fetch_array( $resultado ))
             {
                 $hrz++;
             }
             if($hrz==0)
             {
                   echo '<script language="javascript"> alert ("El numero de control no existe")</script>';
             }else
             {

               //actualizacion de datos (UPDATE)
                 $_UPDATE_SQL="UPDATE `user_cet64` Set nombre = '$nom', apelliP = '$apep',apelliM='$apem',fechNac ='$fech',telefono='$tel',email ='$corr',domicilio='$domi' WHERE noCuenta='$No'";
                 mysqli_query($conn,$_UPDATE_SQL);
                 echo '<script language="javascript"> alert ("Se realizo la actualizacion")</script>';

             }
          }
          }


include("Operaciones/Cierre_BDD.php");
?>
