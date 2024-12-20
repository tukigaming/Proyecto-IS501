<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Manrope%3Awght%40400%3B500%3B700%3B800&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Agregar Poliza</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
    body {
        overflow-x: hidden;
        font-family: 'Inter', 'Noto Sans', sans-serif;
        background-color: #f5f5f5;
    }

    header {
        background-color: #F5F5F5;
        border-bottom: 1px solid #e5e7eb;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    nav {
        display: flex;
        gap: 1.5rem;
        align-items: center;
    }

    nav a {
        font-size: 1.3rem;
        font-weight: 600;
        color: #374151;
        text-decoration: none;
    }

    nav a:hover {
        color: #1d4ed8;
    }

    /* Menú desplegable */
    .dropdown {
        position: relative;
    }

    .dropdown-btn {
        font-size: 1.3rem;
        font-weight: 600;
        color: #374151;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: none;
        border: none;
    }

    .dropdown-btn:hover {
        color: #1d4ed8;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 0.375rem;
        overflow: hidden;
        z-index: 10;
        min-width: 12rem;
    }

    .dropdown-content a {
        display: block;
        padding: 0.75rem 1rem;
        color: #374151;
        text-decoration: none;
        font-size: 1rem;
    }

    .dropdown-content a:hover {
        background-color: #f3f4f6;
        color: #1d4ed8;
    }

    /* Mostrar menú al pasar el ratón */
    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<header class="flex items-center justify-between px-20 py-5">
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

    <nav>
        <div class="dropdown">
            <button class="dropdown-btn">
                Gestiones Personales
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="dropdown-content">
                <a href="Pacientes.php">Pacientes</a>
                <a href="Empleado.php">Empleados</a>
                <a href="Historial.php">Historial Médico</a>
            </div>
        </div>
        <div class="dropdown">
        <button class="dropdown-btn">
                Otras Gestiones
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        <div class="dropdown-content">
                <a href="CitasMedica.php">Citas</a>
                <a href="ConsultaMedica.php">Consultas</a>
                <a href="Polizas.php">Polizas</a>
            </div>
       
        </div>
        <a href="inicio.php">Inicio</a>
        <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-16"
              
            ><img src="../Asset/logos-UNAH-11.png" alt="Descripción de la imagen"></div>
    </nav>
    </header>

<div class="px-5 flex justify-center items-center py-5 bg-gray-100">
    <div class="layout-content-container bg-gray-200 p-10 rounded-lg shadow-lg flex flex-col w-full max-w-[512px]">
        <div class="flex flex-wrap justify-between gap-3 mb-6">
            <p class="text-[#0e141b] tracking-light text-[47px] font-extrabold leading-tight text-center w-full">
                Agregar Poliza
            </p>
        </div>

        <!-- Formulario -->
        <form method="POST" action="" class="formulario">
        <div><br><button type="button"     class="w-full max-w-sm rounded-xl bg-white-600 text-black font-bold py-3 px-6 hover:bg-white-800 focus:ring-4 focus:ring-blue-300"
        onclick="location.href='Pacientes.php'">Volver</button></div><br>
            <?php
                include_once("conexion.php");

                // Sanitizamos el parámetro 'id' para evitar inyección SQL
                $id = intval($_REQUEST['id']);
                
                // Aseguramos que el filtro se haga correctamente sobre los pacientes
                $sql = "
                SELECT 
                    p.*,
                    pa.ID as Paciente_ID
                FROM 
                    Persona p
                INNER JOIN Paciente pa ON p.ID = pa.Persona_ID 
                WHERE 
                    pa.ID = $id";  // Aquí nos aseguramos de filtrar por el ID de Paciente
                
                // Ejecutamos la consulta
                $resultado = $conexion->query($sql);
                
                // Inicializamos las variables para evitar errores si no hay datos
                $row1 = null;
                $nombreCompleto = '';
                $Paciente = '';
                $numeroTelefono = '';
                
                // Verificamos si se obtuvieron resultados
                if ($resultado && $resultado->num_rows > 0) {
                    // Si se encontraron datos, los procesamos
                    $row1 = $resultado->fetch_assoc();
                    $nombreCompleto = $row1['PNombre'] . ' ' . $row1['SNombre'] . ' ' . $row1['PApellido'] . ' ' . $row1['SApellido'];
                    $Paciente = $row1['ID'];
                    // Verificamos si hay teléfono
                    
                } else {
                    echo "No se encontraron datos para el ID proporcionado.";
                }
                
                ?>




            
            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#111717] text-base font-medium leading-normal pb-2">Poliza</p>
                    <select
                        name="Poliza"
                        class="form-select flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                    >
                        <option selected disabled>--Seleccionar Poliza--</option>
                        <?php
include("conexion.php");

// Consulta para obtener las pólizas
$sql = $conexion->query("SELECT * FROM poliza");

// Generar las opciones del select
while ($resultado = $sql->fetch_assoc()) {
    echo "<option value='" . $resultado['ID'] . "'>" . $resultado['Detalles'] . "</option>";
}
?>

<?php
include("conexion.php");

// Consulta para obtener las pólizas
$sql = $conexion->query("SELECT * FROM Area_Trabajo");

// Generar las opciones del select
while ($resultado = $sql->fetch_assoc()) {
    echo "<option value='" . $resultado['ID'] . "'>" . $resultado['Descripcion'] . "</option>";
}
?>
                    </select>
                </label>
            </div>
            

            <div class="flex max-w-full flex-wrap items-end gap-6 mb-6">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#111717] text-base font-medium leading-normal pb-2">Fecha Inicio</p>
                    <input
                        name="Fechainicio"
                        type="text"
                        placeholder="año-mes-dia "
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                    />
                </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-6 mb-6">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#111717] text-base font-medium leading-normal pb-2">Fecha Vencimiento</p>
                    <input
                        name="FechaCaducacion"
                        type="text"
                        placeholder="año-mes-dia "
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                    />
                </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
                <label class="flex flex-col min-w-40 flex-1">
                    <p class="text-[#111717] text-base font-medium leading-normal pb-2">Numero De Poliza</p>
                    <input
                        name="NumPoliza"
                        placeholder=""
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                    />
                </label>
            </div>

            <br><br>

            <div class="flex justify-center">
                <button
                    type="submi"
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
        <footer class="flex flex-col gap-6 px-5 py-10 text-center">
            <div class="flex flex-wrap justify-center gap-4">

            <a href="https://github.com/tukigaming/Proyecto-IS501.git">
                      <div class="text-[#4f7296]" data-icon="GithubLogo" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                          <path
                            d="M208.31,75.68A59.78,59.78,0,0,0,202.93,28,8,8,0,0,0,196,24a59.75,59.75,0,0,0-48,24H124A59.75,59.75,0,0,0,76,24a8,8,0,0,0-6.93,4,59.78,59.78,0,0,0-5.38,47.68A58.14,58.14,0,0,0,56,104v8a56.06,56.06,0,0,0,48.44,55.47A39.8,39.8,0,0,0,96,192v8H72a24,24,0,0,1-24-24A40,40,0,0,0,8,136a8,8,0,0,0,0,16,24,24,0,0,1,24,24,40,40,0,0,0,40,40H96v16a8,8,0,0,0,16,0V192a24,24,0,0,1,48,0v40a8,8,0,0,0,16,0V192a39.8,39.8,0,0,0-8.44-24.53A56.06,56.06,0,0,0,216,112v-8A58.14,58.14,0,0,0,208.31,75.68ZM200,112a40,40,0,0,1-40,40H112a40,40,0,0,1-40-40v-8a41.74,41.74,0,0,1,6.9-22.48A8,8,0,0,0,80,73.83a43.81,43.81,0,0,1,.79-33.58,43.88,43.88,0,0,1,32.32,20.06A8,8,0,0,0,119.82,64h32.35a8,8,0,0,0,6.74-3.69,43.87,43.87,0,0,1,32.32-20.06A43.81,43.81,0,0,1,192,73.83a8.09,8.09,0,0,0,1,7.65A41.72,41.72,0,0,1,200,104Z"
                          ></path>
                        </svg>
                      </div>
                    </a>
                <p class="text-[#4f7296] text-base font-normal leading-normal">By Alumnos IS501</p>
            </div>
        </footer>
    </div>
</div>
<?php
include_once("conexion.php");
var_dump($_GET);

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $Paciente = intval($_GET['id']);
    var_dump($Paciente); // Verifica si el ID se captura correctamente
} else {
    echo "Error: No se ha proporcionado un ID de paciente válido en la URL.<br>";
    exit;
}

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Detalles = isset($_POST['Poliza']) ? $_POST['Poliza'] : null;
    $NumPoliza = $_POST['NumPoliza'];
    $FechaInicio = $_POST['Fechainicio'];
    $FechaCaducacion = $_POST['FechaCaducacion'];

    // Verificar si el paciente existe
    $sqlObtenerPacienteID = "SELECT ID FROM PACIENTE WHERE ID = $Paciente LIMIT 1";
    $resultadoPaciente = $conexion->query($sqlObtenerPacienteID);

    if (!$resultadoPaciente) {
        echo "Error en la consulta SQL: " . $conexion->error;
        exit;
    }

    if ($resultadoPaciente->num_rows == 0) {
        echo "Error: El ID de paciente $Paciente no existe en la base de datos.<br>";
        exit;
    }

    // Insertar en la tabla paciente_has_poliza
    $sqlPacientePoliza = "INSERT INTO paciente_has_poliza 
                          (PACIENTE_ID, POLIZA_ID, Fecha_inicio, Fecha_caducacion, Num_Poliza) 
                          VALUES ('$Paciente', '$Detalles', '$FechaInicio', '$FechaCaducacion', '$NumPoliza')";

    if (mysqli_query($conexion, $sqlPacientePoliza)) {
        echo "Póliza de paciente agregada con éxito.";
    } else {
        echo "Error al insertar en paciente_has_poliza: " . mysqli_error($conexion);
    }
}
?>





</body>
</html>


