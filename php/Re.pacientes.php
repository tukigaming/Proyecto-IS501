<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  

</head>

  <body>
    <h1 class="text-6xl font-extrabold mb-9 text-center">Agregar Nuevo Paciente</h1>
    <br><br>
    <form action="Crud/Insertarpacientes.php" method="POST">
      <div class="container">
      <div class="mb-3">
       <label  class="form-label">Nombre Completo</label><br>
       <input type="text" name="Nombrecompleto" class="form-control" placeholder="--Ingresa tu Nombre Aqui--">
       

       <div class="mb-3">
       <label  class="form-label">Fecha de Nacimiento</label>
       <input type="text" class="form-control"  placeholder="--Ingresa tu Fecha De Nacimiento--">

       <div class="mb-3">
       <label  class="form-label">Sexo</label>
          <select class="form-select mb-3 " name="sexo">
      <option selected>--Selecionar--</option>
      <option value="1">Hombre</option>
      <option value="2">Mujer</option>
      <option value="3">Otros</option>
    </select>

       <div class="mb-3">
       <label  class="form-label">Numero De Identidad</label>
       <input type="number " name="Num_identidad" min="12" max="13" class="form-control" placeholder="--Ingresa tu Identidad--">

       <div class="mb-3">
       <label  class="form-label">Correo</label>
       <input  type="email" name="Correo" class="form-control" placeholder="--Ingresa tu Correo--">

       <div class="mb-3">
       <label  class="form-label">Telefono</label>
       <input type="number" name="telefono" class="form-control" placeholder="--Ingresa tu Telefono--">

       <div class="mb-3">
            <label  class="form-label">Tipo De Poliza</label>
            <select name="tipopoliza" class="form-select" aria-label="Default select example">
        <option selected disabled>--Seleccionar Tipo De poliza--</option>
        <?php
include("conexion.php");

// Consulta para obtener las pólizas
$sql = $conexion->query("SELECT * FROM Tipo_poliza");

// Generar las opciones del select
while ($resultado = $sql->fetch_assoc()) {
    echo "<option value='" . $resultado['id'] . "'>" . $resultado['Descripcion'] . "</option>";
}
?>

      </select>

       <div class="mb-3">
       <label  class="form-label">Telefono De Emergencia</label>
       <input name="tel_emergencia" type="number" min="9" class="form-control" placeholder="--Ingresa El Numero De Emergencia--" >

       
     </div>

     <div class="text-center">
      <button type="submit" class="btn btn-danger">Registrar</button>
      <a href="Pacientes.php" class="btn btn-dark">Regresar</a>
      </div>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

