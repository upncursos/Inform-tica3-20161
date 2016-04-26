<?php
include("conexion.php");

$resultados = $conexion->query("select * from film");
foreach ($resultados as $fila)
{

  echo "$fila[film_id]- $fila[title]</br>";
}    


?>