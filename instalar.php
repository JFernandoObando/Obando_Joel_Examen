<?php
$servername = "localhost";
$username = "prueba";
$password = "c8u$7ShG";
$dbname = "db_mantenimiento";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
  // sql to create table
  $sql = "CREATE TABLE OA_MANTENIMIENTO (
    Fecha date,
    Kilometraje VARCHAR(10) NOT NULL,
    Tipo VARCHAR(30) NOT NULL,
    Nombre_Taller VARCHAR(50) NOT NULL,
    Costos_Mantemiento VARCHAR(30) NOT NULL,
    Costo_Repuestos VARCHAR(50),
    Cambio VARCHAR(20) NOT NULL,
    Observaciones VARCHAR(1024) NOT NULL
    )";
  
  // use exec() because no results are returned
  $conn->exec($sql);
  echo ("La tabla se creo correctamente");
  ?>
<link  rel="stylesheet" href="assets/css/bootstrap.min.css">
 <br>
 <a href="index.html"><input type="button" class="btn btn-outline-primary" value="Inicio"></a>
 <a href="aplicacion.php"><input type="button" class="btn btn-outline-primary" value="Aplicacion"></a>
  <?php

 // echo "Table OA_MANTENIMIENTO created successfully";
} catch(PDOException $e) {
    echo ("La tabla ya existe")
   // echo $e->getMessage();
 // echo $sql . "<br>" . $e->getMessage();
 ?>
 <link  rel="stylesheet" href="assets/css/bootstrap.min.css">
 <br>
 <a href="index.html"><input type="button" class="btn btn-outline-primary" value="Inicio"></a>
 <a href="aplicacion.php"><input type="button" class="btn btn-outline-primary" value="Aplicacion"></a>
 <?php
}

$conn = null;
?>