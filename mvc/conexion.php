<?php
try{
$conexion = new PDO("mysql:host=localhost;dbname=sakila","root","");
echo "CONEXION ESTABLECIDA";


}
catch(Exception $e)
{
    echo $e->getMessage();
}
