<?php
try{
$conexion = new PDO("mysql:host=localhost;dbname=academica","root","");
$resultados = $conexion->query("select * from programa");
foreach ($resultados as $fila)
{
   // echo $fila["id_programa"]." ".$fila["nombre"]."</br>";
  echo "$fila[id_programa]- $fila[nombre]</br>";
}    



}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>