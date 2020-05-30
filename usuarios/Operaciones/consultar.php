<?php
$No = $_POST['nocuenta'];
$hrz = 0;
if($No=="")
{
    echo '<script language="javascript"> alert ("El numero de control es obligatorio")</script>';
}else
{
    $resultado = mysqli_query( $conn, "SELECT * FROM `user_cet64` WHERE noCuenta = '$No' " )  or die ( "Algo ha ido mal en la consulta a la base de datos");
    $resultado1 = mysqli_query($conn,"SELECT * FROM `pass_cet64` WHERE noCuenta = '$No' " )  or die ( "Algo ha ido mal en la consulta a la base de datos");
    while ($consu = mysqli_fetch_array( $resultado ) and $consul = mysqli_fetch_array( $resultado1 ))
    {

        echo "<center><table border cellpadding=\"9\" cellspacing=\"0\">
              <tr>
              <th>No de Control</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Fecha de Nacimiento </th><th> Genero</th><th>Telefono</th><th>Correo</th><th>Domicilio</th><th>User Name</th>
              </tr>
              <tr>
              <td>".$consu['noCuenta']."</td>
              <td>".$consu['nombre']."</td>
              <td>".$consu['apelliP']."</td>
              <td>".$consu['apelliM']."</td>
              <td>".$consu['fechNac']."</td>
              <td>".$consu['genero']."</td>
              <td>".$consu['telefono']."</td>
              <td>".$consu['email']."</td>
              <td>".$consu['domicilio']."</td>
              <td>".$consul['userName']."</td>
              </tr>
              </table>
              </center>";
            $hrz++;
    }



    }
    if($hrz==0)
    {
        echo '<script language="javascript"> alert ("El numero de control no existe")</script>';
    }

?>
