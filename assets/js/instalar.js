
document.getElementById("btnInstalar").onclick = go;
let contador=0;

function go(){
        var valid;
   
   
        document.getElementById("to").innerHTML="<p>El ingreso se realizo exitosamente<\p>"; 
        window.location.href = "instalar.php";
       
         
         // document.getElementById("btnIngresar").innerHTML=++contador;
      
    } 
    //ajax refrescar
    $("#refr").load('../../aplicacion.php' + " #refr");