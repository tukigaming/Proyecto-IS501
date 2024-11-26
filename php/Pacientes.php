<?php

include 'conexion.php';

?>

<!DOCTYPE html>
<html>
<head>
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
        background-color: inherit; /* Hereda el color del body */
    }
    

    nav a {
        font-size: 1.30rem; 
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
            
            <a href="Empleado.php" class="font-semibold text-gray-700">Empleados</a>
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
    
    <main class="flex flex-col items-center justify-center px-10 py-10 w-full max-w-7xl mx-auto bg-gray-50">
    <h2 class="text-6xl font-extrabold mb-9 text-center">PACIENTES</h2>
    <form method="GET" class="mb-6 w-full max-w-5xl flex gap-6 justify-center">
        <!-- Aumentar el ancho del formulario -->
        <label class="relative flex w-3/4"> <!-- Expande el input -->
            <input 
                type="text" 
                name="search" 
                placeholder="Buscar por ID, descripción o licencia" 
                class="w-full py-3 px-5 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-base" 
                value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
            />
            <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                🔍
            </button>
        </label>

        <label class="relative flex w-1/4">
            <!-- Expande el select -->
            <select name="rows_per_page" 
                class="w-full py-3 px-5 border border-gray-300 rounded-lg text-base" 
                style="font-size: 1rem;">
                <option value="5" <?= ($_GET['rows_per_page'] ?? '5') == '5' ? 'selected' : '' ?>>5</option>
                <option value="10" <?= ($_GET['rows_per_page'] ?? '5') == '10' ? 'selected' : '' ?>>10</option>
                <option value="15" <?= ($_GET['rows_per_page'] ?? '5') == '15' ? 'selected' : '' ?>>15</option>
            </select>
        </label>
    </form>

    <div class="bg-white shadow-lg overflow-hidden rounded-lg w-full max-w-8xl">
        <table class="min-w-full border-collapse">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-6 py-4 text-left text-base font-medium text-gray-600">Nombre Completo</th>
                    <th class="px-6 py-4 text-left text-base font-medium text-gray-600">ID Paciente</th>
                    <th class="px-6 py-4 text-left text-base font-medium text-gray-600">Última Visita</th>
                    <th class="px-10 py-4 text-left text-base font-medium text-gray-600">Teléfono</th>
                    <th class="px-10 py-4 text-left text-base font-medium text-gray-600">Accion</th>
                    
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
        PACIENTE.ID AS Paciente_ID,
        CONCAT(PERSONA.PNombre, ' ', PERSONA.SNombre, ' ', PERSONA.PApellido, ' ', PERSONA.SApellido) AS Nombre_Completo,
        MAX(Historial_Medico.Fecha) AS Ultima_Visita,
        GROUP_CONCAT(TELEFONO.Numero SEPARATOR ' , ') AS Telefonos
        FROM 
        PACIENTE
        INNER JOIN PERSONA ON PACIENTE.PERSONA_ID = PERSONA.ID
        LEFT JOIN TELEFONO ON PERSONA.ID = TELEFONO.Persona_ID
        LEFT JOIN Historial_Medico ON PACIENTE.ID = Historial_Medico.Paciente_ID
        WHERE 
        CONCAT(PERSONA.PNombre, ' ', PERSONA.SNombre, ' ', PERSONA.PApellido, ' ', PERSONA.SApellido) LIKE '%$busqueda%'
        OR TELEFONO.Numero LIKE '%$busqueda%'
        OR PACIENTE.ID LIKE '%$busqueda%'
        GROUP BY 
        PACIENTE.ID, Nombre_Completo
        LIMIT $rows_per_page OFFSET $offset
        ");

// Consulta para contar el total de filas
$total_consulta = $conexion->query("
    SELECT COUNT(DISTINCT PACIENTE.ID) as total
    FROM 
        PACIENTE
    INNER JOIN PERSONA ON PACIENTE.PERSONA_ID = PERSONA.ID
    LEFT JOIN TELEFONO ON PERSONA.ID = TELEFONO.Persona_ID
    WHERE 
        CONCAT(PERSONA.PNombre, ' ', PERSONA.SNombre, ' ', PERSONA.PApellido, ' ', PERSONA.SApellido) LIKE '%$busqueda%'
        OR TELEFONO.Numero LIKE '%$busqueda%'
        OR PACIENTE.ID LIKE '%$busqueda%'
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
        echo "<tr class='border-t bg-[#f9fafb]'> <!-- Cambia el color de fondo -->
            <td class='px-6 py-4'>{$row['Nombre_Completo']}</td>
            <td class='px-6 py-4'>{$row['Paciente_ID']}</td>
            <td class='px-6 py-4'>{$row['Ultima_Visita']}</td>
            <td class='px-6 py-4'>{$row['Telefonos']}</td>
        <td class='px-10 py-4'>
                <a href='' 
                   class='text-blue-500 hover:underline'>
                    Modificar
                </a>
            </td>

        </tr>";
    }
} else {
    echo "<tr class='bg-[#f9fafb]'><td colspan='4' class='px-6 py-4 text-center text-gray-500'>No se encontraron resultados</td></tr>";
}
?>


            </tbody>
        </table>
    </div>

    <div class="mt-10 flex flex-wrap justify-center gap-6 items-center w-full max-w-6xl">
        <div class="flex gap-2">
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?search=<?= htmlspecialchars($busqueda) ?>&rows_per_page=<?= $rows_per_page ?>&page=<?= $i ?>"
                   class="px-4 py-2 border <?= $i == $page ? 'bg-blue-500 text-white' : 'bg-white text-gray-700' ?> rounded-lg">
                    <?= $i ?>
                </a>
            <?php endfor; ?>
        </div>

        <a href="EditarPaciente.php">
    <button type="button" class="px-10 py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">
        Agregar Paciente
    </button>
</a>

    </div>
</main>




 </div>
</body>
</html>

