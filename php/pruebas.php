<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "base_py_bd1";

    $coneccion = mysqli_connect ($servidor, $usuario, $clave, $bd )

?>


<form method="post">

<input type="text" name="nombre" placeholder="nombre">
<input type="text" name="correo" placeholder="correo">
<input type="text" name="telefono" placeholder="telefono">
    
<input type= "submit" name="enviar">

</form>

<?php

  if(isset($_POST['enviar'])){
      
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];
      $telefono = $_POST['telefono'];
      
      $insertar = "INSERT INTO datos Values ('$nombre','$correo','$telefono','')";
      
      $coneccion = mysqli_query($coneccion,$insertar);
  }
?>
