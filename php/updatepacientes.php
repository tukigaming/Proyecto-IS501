<?php
include_once("conexion.php");

?>





<html>
<head>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link
    rel="stylesheet"
    as="style"
    onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Manrope%3Awght%40400%3B500%3B700%3B800&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
  />
  <title>Pagina Editar Paciente</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <style>
        body {
            overflow-x: hidden;
            font-family: 'Inter', 'Noto Sans', sans-serif;
            background-color: #f5f5f5;
        }

    header {
        background-color: inherit; /* Hereda el color del body */
    }
    

    nav a {
        font-size: 1.30rem; 
    }

    .formulario{
      width: 100%; /* Asegura que el formulario ocupe el 100% del espacio disponible */
     
    flex-wrap: wrap; /* Permite que los elementos se ajusten a la siguiente línea si no caben */
    
    box-sizing: border-box;
    }
    </style>
    <title>Pacientes</title>
</head>
<body>
    <div class="relative flex min-h-screen flex-col bg-slate-50">
    <header class="flex items-center justify-between border-b px-20 py-5 shadow-md">

    <div class="flex items-center gap-2"> 
    <svg
        viewBox="0 0 48 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        class="w-6 h-6" 
    >
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z"
            fill="currentColor"
        ></path>
    </svg>
         <h1 class="text-3xl font-bold">MediCare</h1>
        </div>


        <nav class="flex gap-6">
            
            <a href="Pacientes.php" class="font-semibold text-gray-700">Pacientes</a>
            <a href="#" class="font-semibold text-gray-700">Citas</a>
            <a href="#" class="font-semibold text-gray-700">Historial Médico</a>
        
            <a href="inicio.php" class="font-semibold text-gray-700">Inicio</a>

            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-12"
              style="
                background-image: url('https://cdn.usegalileo.ai/stability/b8951bbb-4539-4798-bee6-7a9bc44b9ce9.png');
              "
            ></div>
        </nav>
        
    </header>
    <div class="px-40 flex justify-center items-center py-10 bg-gray-100">
    <div class="layout-content-container bg-gray-200 p-10 rounded-lg shadow-lg flex flex-col w-full max-w-[512px]">
        <div class="flex flex-wrap justify-between gap-3 mb-6">
            <p class="text-[#0e141b] tracking-light text-[52px] font-extrabold leading-tight text-center w-full">
                Editar Paciente
            </p>
        </div>
        <div><br><button type="button"     class="w-full max-w-sm rounded-xl bg-white-600 text-black font-bold py-3 px-6 hover:bg-white-800 focus:ring-4 focus:ring-blue-300"
<<<<<<< HEAD
        onclick="location.href='Pacientes.php'">Volver</button></div><br>
=======
        onclick="location.href='Empleado.php'">Volver</button></div><br>
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
        <!-- Formulario -->
        <form method="POST"  class="formulario">
        <?php
include_once("conexion.php");

// Obtener información del paciente, persona y su teléfono usando el ID del paciente
$sql = "SELECT pa.ID AS PacienteID, p.*, t.Numero AS Telefono 
        FROM Paciente pa
        INNER JOIN Persona p ON pa.PERSONA_ID = p.ID
        LEFT JOIN Telefono t ON p.ID = t.Persona_ID
        WHERE pa.ID =" . $_REQUEST['id'];

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    // Acceso a los datos
    $pacienteID = $row['PacienteID'];
    $personaID = $row['ID'];
    $telefono = $row['Telefono'];
} else {
    echo "No se encontró el paciente con el ID especificado.";
}
?>


<input type="hidden" name="PersonaID" value="<?php echo $row['ID']; ?>">
            
            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
                <label class="flex flex-col w-full">
                    <p class="text-[#111717] text-base font-medium leading-normal pb-2">Nombre Completo</p>
                    <input
                        name="NombreCompleto"
                        placeholder="Nombre Completo"
                        class="form-input flex w-full resize-none rounded-xl border border-gray-400 bg-white focus:ring-2 focus:ring-blue-500 h-14 placeholder-gray-500 p-4 text-base"
                        value="<?php echo $row['PNombre'] . ' ' . $row['SNombre'] . ' ' . $row['PApellido'] . ' ' . $row['SApellido']; ?>"
                        />
                </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Fecha De Nacimiento</p>
                <input
                  name="FechaNacimiento"
                  type="text"
                  placeholder="año-mes-dia"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                  value="<?php echo $row['Fecha_Nacim']?>"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-6 mb-7">
              <p class="text-[#111717] text-base font-medium leading-normal pb-0.3">Sexo</p>
              <label>
                <input type="radio" name="sexo" value="H" <?php echo ($row['sexo'] === 'H') ? 'checked' : ''; ?>/>
                Hombre
              </label>
              <label>
                <input type="radio" name="sexo" value="M" <?php echo ($row['sexo'] === 'M') ? 'checked' : ''; ?> />
                Mujer
              </label>  
              <label>
                <input type="radio" name="sexo" value="O" <?php echo ($row['sexo'] === 'O') ? 'checked' : ''; ?>  />
                Pref. No Decir
              </label>
            </div>

        
            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Num. Identidad</p>
                <input
                  name="Identidad"
                  placeholder="xxxx-xxxx-xxxxx"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                  value="<?php echo $row['Identidad']?>"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Num. RTN</p>
                <input
                  name="RTN"
                  placeholder="xxxx-xxxx-xxxxxx"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                 value="<?php echo $row['RTN']?>"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Num. De Telefono</p>
                <input
                  name="NumeroTelefono"
                  placeholder="xxxx-xxxx"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                 value="<?php echo $row['Telefono']?>"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
                <label class="flex flex-col w-full">
                    <p class="text-[#111717] text-base font-medium leading-normal pb-2">Correo</p>
                    <input
                        name="correo"
                        type="email"
                        placeholder="ejemplo@correo.com"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                        value="<?php echo $row['correo']?>"
                        />
                </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
  <label class="flex flex-col min-w-40 flex-1">
    <p class="text-[#111717] text-base font-medium leading-normal pb-2">Direccion</p>
    <textarea
      name="Direccion"
      placeholder="Direccion exacta"
      class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
    ><?php echo htmlspecialchars($row['Direccion']); ?></textarea>
  </label>
</div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Num. De Emergencia</p>
                <input
                  placeholder="xxxx-xxxx"
                  name = "Emergencia"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                  value="<?php echo $row['Numero_Emergencia']?>"
                />
              </label>
            </div>

            <div class="flex justify-center">
                <button
                    type="submit"
                    class="w-full max-w-sm rounded-xl bg-blue-600 text-white font-bold py-3 px-6 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300"
                >
                    Guardar
                </button>
            </div>
        </form>
    </div>
</div>
<div class="px-40 flex flex-1 justify-center py-5">
              <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <footer class="flex flex-col gap-6 px-5 py-10 text-center @container">
                  <div class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                    
                  </div>
                  <div class="flex flex-wrap justify-center gap-4">
                    <a href="#">
                      <div class="text-[#4f7296]" data-icon="GithubLogo" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                          <path
                            d="M208.31,75.68A59.78,59.78,0,0,0,202.93,28,8,8,0,0,0,196,24a59.75,59.75,0,0,0-48,24H124A59.75,59.75,0,0,0,76,24a8,8,0,0,0-6.93,4,59.78,59.78,0,0,0-5.38,47.68A58.14,58.14,0,0,0,56,104v8a56.06,56.06,0,0,0,48.44,55.47A39.8,39.8,0,0,0,96,192v8H72a24,24,0,0,1-24-24A40,40,0,0,0,8,136a8,8,0,0,0,0,16,24,24,0,0,1,24,24,40,40,0,0,0,40,40H96v16a8,8,0,0,0,16,0V192a24,24,0,0,1,48,0v40a8,8,0,0,0,16,0V192a39.8,39.8,0,0,0-8.44-24.53A56.06,56.06,0,0,0,216,112v-8A58.14,58.14,0,0,0,208.31,75.68ZM200,112a40,40,0,0,1-40,40H112a40,40,0,0,1-40-40v-8a41.74,41.74,0,0,1,6.9-22.48A8,8,0,0,0,80,73.83a43.81,43.81,0,0,1,.79-33.58,43.88,43.88,0,0,1,32.32,20.06A8,8,0,0,0,119.82,64h32.35a8,8,0,0,0,6.74-3.69,43.87,43.87,0,0,1,32.32-20.06A43.81,43.81,0,0,1,192,73.83a8.09,8.09,0,0,0,1,7.65A41.72,41.72,0,0,1,200,104Z"
                          ></path>
                        </svg>
                      </div>
                    </a>
                    <a href="#">
                      <div class="text-[#4f7296]" data-icon="LinkedinLogo" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                          <path
                            d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24Zm0,192H40V40H216V216ZM96,112v64a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0Zm88,28v36a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140ZM100,84A12,12,0,1,1,88,72,12,12,0,0,1,100,84Z"
                          ></path>
                        </svg>
                      </div>
                    </a>
                  </div>
                  <p class="text-[#4f7296] text-base font-normal leading-normal">By Alumnos IS501 </p>
                </footer>
              </div>
          </div>
</body>
</html>


<?php
include_once("conexion.php");

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos enviados desde el formulario
    $PersonaID = $_POST['PersonaID'] ?? null; // ID del paciente (enviado desde el formulario si existe)
    $NombreCompleto = $_POST['NombreCompleto'] ?? '';
    $Direccion = $_POST['Direccion'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $sexo = $_POST['sexo'] ?? '';
    $Identidad = $_POST['Identidad'] ?? '';
    $RTN = $_POST['RTN'] ?? '';
    $NumeroTelefono = $_POST['NumeroTelefono'] ?? '';
    $FechaNaci = $_POST['FechaNacimiento'] ?? '';
    $Num_emergencia = $_POST['Emergencia'] ?? '';

    // Dividir el nombre completo en partes
    $nombrePartes = explode(' ', $NombreCompleto);
    $PNombre = $nombrePartes[0] ?? '';
    $SNombre = $nombrePartes[1] ?? '';
    $PApellido = $nombrePartes[2] ?? '';
    $SApellido = $nombrePartes[3] ?? '';

    if ($PersonaID) {
        // Verificar si la persona existe
        $sqlVerificarPersona = "SELECT ID FROM PERSONA WHERE ID = '$PersonaID'";
        $resultado = mysqli_query($conexion, $sqlVerificarPersona);

        if (mysqli_num_rows($resultado) > 0) {
            // Si la persona existe, proceder a actualizar
            $sqlUpdatePersona = "UPDATE PERSONA 
                                 SET PNombre = '$PNombre', SNombre = '$SNombre', PApellido = '$PApellido', SApellido = '$SApellido',
                                     Direccion = '$Direccion', correo = '$correo', sexo = '$sexo', Identidad = '$Identidad', 
                                     RTN = '$RTN', Fecha_Nacim = '$FechaNaci', Numero_Emergencia = '$Num_emergencia'
                                 WHERE ID = '$PersonaID'";

            if (mysqli_query($conexion, $sqlUpdatePersona)) {
                // Actualizar el número de teléfono
                $sqlUpdateTelefono = "UPDATE TELEFONO 
                                      SET Numero = '$NumeroTelefono'
                                      WHERE Persona_ID = '$PersonaID'";
                if (mysqli_query($conexion, $sqlUpdateTelefono)) {
                    echo "Datos actualizados correctamente.";
                } else {
                    echo "Error al actualizar TELEFONO: " . mysqli_error($conexion);
                }
            } else {
                echo "Error al actualizar PERSONA: " . mysqli_error($conexion);
            }
        } else {
            echo "El ID proporcionado no existe en la tabla PERSONA.";
        }
    } else {
        echo "El ID del paciente no se proporcionó.";
    }
}
<<<<<<< HEAD
?>
=======
?>




>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6