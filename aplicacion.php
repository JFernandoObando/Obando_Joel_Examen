
<?php
$conexion=mysqli_connect('localhost','prueba','c8u$7ShG','db_mantenimiento');
?>
<!DOCTYPE html>
<head>
<title>Examen Obando_Arias</title>
<meta name="title" content="Examen Obando_Arias">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link  rel="stylesheet" href="assets/css/bootstrap.min.css">
<link  rel="stylesheet" href="assets/css/estilos.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>
    <header>
        

    
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
            
             
            <a class="navbar-brand mb-0 h1" href="#">
              
                Obando_Arias
              </a>
              <button class="navbar-toggler ms-auto navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleDemo01" aria-controls="navbarToggleDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarToggleDemo01">
        <div class="navbar-nav text-center">
            
       
            <a class="nav-item nav-link active" href="index.html">Inicio</a>
            <a class="nav-item nav-link active" href="instalacion.html">Instalacion</a>
            <a class="nav-item nav-link active" href="#">Aplicacion</a>
         
        </div>
    </div>
    
        </nav>
      </header>

      <div class="container">
    
        <section>
            <div class="cont1">
            <article>
                <div class="quien">
                    <h2>Instalacion de la aplicacion<br><span>Creacion de la tabla</span></h2>
            </div>  
         
    
        	<table class="table">
            <thead>
        <tr>
          <th scope="col">FECHA</th>
          <th scope="col">KILOMETRAJE</th>
          <th scope="col">TIPO</th>
          <th scope="col">NOMBRE TALLER</th>
          <th scope="col">COSTO MANTENIMIENTO</th>
          <th scope="col">COSTO RESPUESTO</th>
          <th scope="col">CAMBIO</th>
          <th scope="col">OBSERVACIONES</th>
      
        </tr>
            </thead>
    
        <?php 
        $sql="SELECT * from OA_MANTENIMIENTO";
        $result=mysqli_query($conexion,$sql);
    
        while($mostrar=mysqli_fetch_array($result)){
         ?>
    
        <tr>
          <td><?php echo $mostrar['Fecha'] ?></td>
          <td><?php echo $mostrar['Kilometraje'] ?></td>
          <td><?php echo $mostrar['Tipo'] ?></td>
          <td><?php echo $mostrar['Nombre_Taller'] ?></td>
          <td><?php echo $mostrar['Costos_Mantemiento'] ?></td>
          <td><?php echo $mostrar['Costo_Repuestos'] ?></td>
          <td><?php echo $mostrar['Cambio'] ?></td>
          <td><?php echo $mostrar['Observaciones'] ?></td>
        </tr>
      <?php 
      }
       ?>
      </table>
              <h2>Ingreso de datos</h2>
              <a href="formulario.html"><input type="button" class="btn btn-outline-primary" value="Formulario"></a>
              <a href="aplicacion.php"><input type="button" class="btn btn-outline-primary" value="Refrescar"></a>
  
              <div id="abcd"></div>
   
                <div id="to"></div>
            </div>
            </article>
        </section>
    </div>
    <div id="abcd"></div>
   
</body>
<footer>

</footer>



    <!--enlace a js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/instalar.js"></script>

</html>




