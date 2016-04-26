
<!--//http://localhost/app1/prepared.php?year=2006&rating=PG -->
<?php $year = $_GET["year"]; ?>
<?php $rating = $_GET["rating"]; ?>

<h1> Prepared Statement usando ? y bindValue() </h1>
<?php
try{    
$conexion = new PDO("mysql:host=localhost;dbname=sakila","root","");
$consulta = $conexion->prepare("select * from film where release_year=? and rating=?");
$consulta->bindValue(1, $year);
$consulta->bindValue(2, $rating);
$consulta->execute();
$filas = $consulta->fetchAll(PDO::FETCH_ASSOC);

    foreach($filas as $fila)
    {
    echo $fila["title"]."</br>";
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>
<h1> Prepared Statement usando Par&aacute;metros y bindValue() </h1>
<?php
try{    
$conexion = new PDO("mysql:host=localhost;dbname=sakila","root","");
$consulta = $conexion->prepare("select * from film where release_year=:year and rating=:rating");
$consulta->bindValue(':year', $year);
$consulta->bindValue(':rating', $rating);
$consulta->execute();
$filas = $consulta->fetchAll(PDO::FETCH_ASSOC);

    foreach($filas as $fila)
    {
    echo $fila["title"]."</br>";
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>