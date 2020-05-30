<?php
$user="root";
$host="localhost";
$password="";
$BDD="BDD_cet64_3p";
$conn =mysqli_connect($host,$user,$password,$BDD);
if(!$conn)
{
  echo "Error en la conexion";
}
 ?>
