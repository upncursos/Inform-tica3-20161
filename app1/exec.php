<?php
try{
$conexion = new PDO("mysql:host=localhost;dbname=sakila","root","");
$n=$conexion->exec("insert into language values(7,'Spanish', '2013-03-01:15:02:02')");
echo "se insertaron $n filas";

}
catch(Exception $e)
{
    echo $e->getMessage();
}
