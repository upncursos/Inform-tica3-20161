<?php
try{
$conexion = new PDO("mysql:host=localhost;dbname=sakila","root","");
}
catch(Exception $e)
{
    echo $e->getMessage();
}
