<?php

function datef()
{
  $meses = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
  return date('d')." de ".$meses[date('n')]." de ".date('Y');
}
 ?>
