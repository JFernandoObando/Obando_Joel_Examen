<?php 


  $fecha = $_GET [ 'fecha' ];
  $kilometraje = $_GET [ 'kilo' ];
  $tipo = $_GET [ 'flexRadioDefault' ];
  $nombre = $_GET [ 'nombre' ];
  $costo = $_GET [ 'costo_ma' ];
  $cos_rep = $_GET [ 'costo_re' ];
  
  $cambio = $_GET [ 'chk1' ];
  $cambio2 = $_GET [ 'chk2' ];
  $cambio3 = $_GET [ 'chk3' ];
  $observaciones = $_GET [ 'textarea' ];

  $chek=$cambio.$cambio2.$cambio3;
  echo $fecha;
  echo $kilometraje;
  echo $chek;
  //echo $chek;


$db_host= "localhost";
$db_usuario= "prueba";
$db_contra = "c8u$7ShG";
$db_nombre= "db_mantenimiento";
$connexion = mysqli_connect($db_host,$db_usuario,$db_contra);

if( mysqli_connect_errno())
  {

      echo "Hubo un problema con la base de datos error al conectar";

      exit() ;
  }

  mysqli_select_db($connexion,$db_nombre) or die ("No se encuentra la Base de 
 datos");

  mysqli_set_charset($connexion,"utf8");

echo
  
      $instruccion_SQL = "INSERT INTO OA_MANTENIMIENTO (Fecha,Kilometraje, 
    Tipo,Nombre_Taller,Costos_Mantemiento,Costo_Repuestos,Cambio,Observaciones)
                             VALUES ('$fecha','$kilometraje','$tipo','$nombre','$costo','$cos_rep','$chek','$observaciones')";

    

   $resultado = mysqli_query($connexion,$instruccion_SQL);
   if($resultado == FALSE)
   {
       echo "error en la consulta";
   }  else
   {
       echo "Ingresado Coreectamente revise la tabla";
   }



            mysqli_close($connexion);



   ?>
   <link  rel="stylesheet" href="assets/css/bootstrap.min.css">
 <br>
 <a href="aplicacion.php"><input type="button" class="btn btn-outline-primary" value="APLICACION"></a>
