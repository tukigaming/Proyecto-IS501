<?php

include 'conexion.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Historial Medico</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" 
          href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter:wght@400;500;700;900&amp;family=Noto+Sans:wght@400;500;700;900" />
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
    
<main class="flex flex-col items-center justify-center px-10 py-10 w-full  mx-auto bg-gray-50">
    <h2 class="text-6xl font-extrabold mb-9 text-center">HISTORIAL MEDICO</h2>
    
    <!-- Formulario de búsqueda y selección de filas por página -->
    <form method="GET" class="mb-6 w-full max-w-6xl flex gap-6 justify-center">
        <label class="relative flex w-3/4"> 
            <input 
                type="text" 
                name="search" 
                placeholder="Buscar Nombre // Fecha // Identidad (xxxx-xxxx-xxxxx) // Telefono " 
                class="w-full py-4 px-6 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-lg" 
                value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
            />
            <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                🔍
            </button>
        </label>

        <label class="relative flex w-1/4">
            <select name="rows_per_page" 
                class="w-full py-4 px-6 border border-gray-300 rounded-lg text-lg" 
                style="font-size: 1rem;">
                <option value="5" <?= ($_GET['rows_per_page'] ?? '5') == '5' ? 'selected' : '' ?>>5</option>
                <option value="10" <?= ($_GET['rows_per_page'] ?? '5') == '10' ? 'selected' : '' ?>>10</option>
                <option value="15" <?= ($_GET['rows_per_page'] ?? '5') == '15' ? 'selected' : '' ?>>15</option>
            </select>
        </label>
    </form>

    <!-- Contenedor de la tabla con overflow-x-auto para hacerla desplazable -->
    <div class="bg-white shadow-lg overflow-x-auto rounded-lg w-full">
    <table class="min-w-full border-collapse text-sm">
    <thead class="bg-blue-500 border-b">
        <tr>
        <th class="px-4 py-6 text-left font-medium text-white" style="width: 10%;">ID</th>
<th class="px-4 py-6 text-left font-medium text-white" style="width: 12%;">Fecha Inicio</th>
<th class="px-4 py-6 text-left font-medium text-white" style="width: 12%;">Fecha de Visita</th>
<th class="px-4 py-6 text-left font-medium text-white" style="width: 20%;">Nombre del Paciente</th>
<th class="px-4 py-6 text-left font-medium text-white" style="width: 10%;">Identidad</th>
<th class="px-4 py-6 text-left font-medium text-white" style="width: 10%;">Teléfonos</th>
<th class="px-4 py-6 text-left font-medium text-white" style="width: 15%;">Correo</th>
<th class="px-4 py-6 text-left font-medium text-white" style="width: 25%;">Observaciones</th>
 
        </tr>
    </thead>
    <tbody>
        <?php
        $busqueda = $conexion->real_escape_string($_GET['search'] ?? '');
        $rows_per_page = intval($_GET['rows_per_page'] ?? 5);
        $page = max(intval($_GET['page'] ?? 1), 1);
        $offset = ($page - 1) * $rows_per_page;

        $consulta = $conexion->query("
        SELECT 
            HM.ID AS HistorialID,
            HM.Fecha_Inicio,
            HM.Fecha,
            HM.Observaciones,
            CONCAT(P.PNombre, ' ', P.SNombre, ' ', P.PApellido, ' ', P.SApellido) AS PacienteNombreCompleto,
            P.Identidad,
            P.correo,
            P.sexo,
            GROUP_CONCAT(T.Numero SEPARATOR ' , ') AS TelefonosPaciente
        FROM 
            Historial_Medico HM
        INNER JOIN PACIENTE PAC ON HM.Paciente_ID = PAC.ID
        INNER JOIN PERSONA P ON PAC.PERSONA_ID = P.ID
        LEFT JOIN TELEFONO T ON T.Persona_ID = P.ID
        WHERE 
            (
                HM.Observaciones LIKE '%$busqueda%'
                OR CONCAT(P.PNombre, ' ', P.SNombre, ' ', P.PApellido, ' ', P.SApellido) LIKE '%$busqueda%'
                OR P.Identidad REGEXP '^[0-9]{4}-[0-9]{4}-[0-9]{5}$' AND P.Identidad LIKE '%$busqueda%'
                OR T.Numero REGEXP '^[0-9]{4}-[0-9]{4}$' AND T.Numero LIKE '%$busqueda%'
                OR P.correo LIKE '%$busqueda%'
                OR P.sexo LIKE '%$busqueda%'
                OR HM.Fecha REGEXP '^[0-9]{4}-[0-9]{2}-[0-9]{2}$' AND HM.Fecha LIKE '%$busqueda%'
            )
        GROUP BY HM.ID, HM.Fecha_Inicio, HM.Fecha, HM.Observaciones, P.ID
        ORDER BY HM.Fecha DESC
        LIMIT $offset, $rows_per_page;
    ");
    
    // Consulta para contar el total de filas
    $total_consulta = $conexion->query("
        SELECT COUNT(DISTINCT HM.ID) AS total
        FROM 
            Historial_Medico HM
        INNER JOIN PACIENTE PAC ON HM.Paciente_ID = PAC.ID
        INNER JOIN PERSONA P ON PAC.PERSONA_ID = P.ID
        LEFT JOIN TELEFONO T ON P.ID = T.Persona_ID
        WHERE 
            (
                HM.Observaciones LIKE '%$busqueda%'
                OR CONCAT(P.PNombre, ' ', P.SNombre, ' ', P.PApellido, ' ', P.SApellido) LIKE '%$busqueda%'
                OR P.Identidad REGEXP '^[0-9]{4}-[0-9]{4}-[0-9]{5}$' AND P.Identidad LIKE '%$busqueda%'
                OR T.Numero REGEXP '^[0-9]{4}-[0-9]{4}$' AND T.Numero LIKE '%$busqueda%'
                OR P.correo LIKE '%$busqueda%'
                OR P.sexo LIKE '%$busqueda%'
                OR HM.Fecha REGEXP '^[0-9]{4}-[0-9]{2}-[0-9]{2}$' AND HM.Fecha LIKE '%$busqueda%'
            )
    ");
    

        if ($total_consulta) {
            $total_rows = $total_consulta->fetch_assoc()['total'];
            $total_pages = ceil($total_rows / $rows_per_page);
        } else {
            $total_rows = 0;
            $total_pages = 1; // Asignar al menos 1 página para evitar errores
        }

        // Mostrar resultados
        if ($consulta->num_rows > 0) {
            while ($row = $consulta->fetch_assoc()) {
                echo "<tr class='border-t bg-[#f9fafb]'>
                    <td class='px-4 py-6'>{$row['HistorialID']}</td>
                    <td class='px-4 py-6'>{$row['Fecha_Inicio']}</td>
                    <td class='px-4 py-6'>{$row['Fecha']}</td>
                    <td class='px-4 py-6'>{$row['PacienteNombreCompleto']}</td>
                    <td class='px-4 py-6'>{$row['Identidad']}</td>
                    <td class='px-4 py-6'>{$row['TelefonosPaciente']}</td>
                    <td class='px-4 py-6'>{$row['correo']}</td>
                    <td class='px-2 py-6'>{$row['Observaciones']}</td>
                </tr>";
            }
        } else {
            echo "<tr class='bg-[#f9fafb]'><td colspan='9' class='px-4 py-6 text-center text-gray-500'>No se encontraron resultados</td></tr>";
        }
        ?>
    </tbody>
</table>

    </div>

    <!-- Paginación -->
    <div class="mt-10 flex flex-wrap justify-center gap-6 items-center w-full max-w-7xl">
        <div class="flex gap-2">
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?search=<?= htmlspecialchars($busqueda) ?>&rows_per_page=<?= $rows_per_page ?>&page=<?= $i ?>"
                   class="px-6 py-4 border <?= $i == $page ? 'bg-blue-500 text-white' : 'bg-white text-gray-700' ?> rounded-lg text-lg">
                    <?= $i ?>
                </a>
            <?php endfor; ?>
        </div>
    </div><br>
    <a href="Imprimir.php">
    <button type="button" class="w-full max-w-lg rounded-xl bg-white-600 text-black font-bold py-3 px-6 border border-black hover:bg-white-600 focus:ring-4 focus:ring-blue-300">    
    Reportes
    </button>
</a>
</main>


 </div>
</body>

<div class="px-40 flex flex-1 justify-center py-5">
              <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <footer class="flex flex-col gap-6 px-5 py-10 text-center @container">
                  <div class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                    
                  </div>
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
                    
                  </div>
                  <a href="../Asset/MANUAL USUARIO EXPEDIENTE_MEDICO.pdf" class="text-[#4f7296] text-base font-normal leading-normal">By Alumnos IS501 </a>
                </footer>
              </div>
          </div>
</html>

