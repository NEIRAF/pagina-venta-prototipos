<?php
$No = $_POST['nocuenta'];
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
$encrip = md5($Pass);
if($No=="")
{
    echo '<script language="javascript"> alert ("El numero de control es obligatorio")</script>';
}else
{
  $hrz=0;
  $resultado = mysqli_query($conn, "SELECT * FROM `user_cet64` WHERE noCuenta = '$No'" )  or die ( "Algo ha ido mal en la consulta a la base de datos");
  while ($consu = mysqli_fetch_array( $resultado ))
   {
       $hrz++;
   }
   if($hrz==0)
   {
         echo '<script language="javascript"> alert ("El numero de control no existe")</script>';
   }else
   {
     if((strlen($nom)>0) && (strlen($apep)>0)&&(strlen($apem)>0)&&(strlen($fech)>0)&&(strlen($gen)>0)&&(strlen($tel)>0)&&(strlen($corr)>0)&&(strlen($domi)>0)&&(strlen($userN)>0)&&(strlen($encrip)>0))
     {
       $_UPDATE_SQL="UPDATE `user_cet64` Set noCuenta = '$No', nombre='$nom', apelliP='$apep', apelliM='$apem', fechNac='$fech', genero='$gen',telefono='$tel', email='$corr', domicilio ='$domi' WHERE noCuenta='$No'" and "UPDATE `pass_cet64` set userName = '$userN',pass = '$encrip'";
         mysqli_query($conn,$_UPDATE_SQL);
         echo '<script language="javascript"> alert ("Se realizo la actualizacion")</script>';

     }else {
       echo '<script language="javascript"> alert ("Todos los datos debes de ser llenados")</script>';
     }
   }
}
?>
