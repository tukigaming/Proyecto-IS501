<?php

include 'php/conexion.php';

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
        }
    </style>
    <title>Pacientes</title>
</head>
<body>
    <div class="relative flex min-h-screen flex-col bg-slate-50">
        <header class="flex items-center justify-between border-b px-20 py-5 bg-white shadow-md">
            <h1 class="text-lg font-bold">MediCare</h1>
            <nav class="flex gap-6">
                <a href="#" class="text-sm font-semibold text-gray-700">Pacientes</a>
                <a href="#" class="text-sm font-semibold text-gray-700">Empleados</a>
                <a href="#" class="text-sm font-semibold text-gray-700">Citas</a>
                <a href="#" class="text-sm font-semibold text-gray-700">Historial Médico</a>
            </nav>
        </header>

        <main class="flex-1 px-10 py-6">
            <h2 class="text-2xl font-extrabold mb-6">PACIENTES</h2>
            <form method="GET" class="mb-6">
                <label class="relative flex w-full max-w-md">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Buscar por ID, descripción o licencia" 
                        class="w-full py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                        value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
                    />
                    <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2">
                        🔍
                    </button>
                </label>

                <label class="block mt-4">
                    Mostrar 
                    <select name="rows_per_page" 
            class="py-2 px-4 border border-gray-300 rounded-lg text-lg" 
            style="font-size: 1.2rem; padding: 10px; height: 50px; width: 68px;">
        <option value="5" <?= ($_GET['rows_per_page'] ?? '5') == '5' ? 'selected' : '' ?>>5</option>
        <option value="10" <?= ($_GET['rows_per_page'] ?? '5') == '10' ? 'selected' : '' ?>>10</option>
        <option value="15" <?= ($_GET['rows_per_page'] ?? '5') == '15' ? 'selected' : '' ?>>15</option>
    </select> filas por página.
                </label>
            </form>

            <div class="bg-white shadow overflow-hidden rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">ID</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Descripción</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Licencia</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        

                        // Parámetros de búsqueda y paginación
                        $busqueda = $conexion->real_escape_string($_GET['search'] ?? '');
                        $rows_per_page = intval($_GET['rows_per_page'] ?? 5);
                        $page = max(intval($_GET['page'] ?? 1), 1);
                        $offset = ($page - 1) * $rows_per_page;

                        // Consulta con paginación
                        $consulta = $conexion->query("
                            SELECT * 
                            FROM especialidad 
                            WHERE ID LIKE '%$busqueda%' OR Descripcion LIKE '%$busqueda%' OR licencia LIKE '%$busqueda%'
                            LIMIT $rows_per_page OFFSET $offset
                        ");

                        // Mostrar resultados
                        if ($consulta->num_rows > 0) {
                            while ($row = $consulta->fetch_assoc()) {
                                echo "<tr class='border-t'>
                                    <td class='px-6 py-4'>{$row['ID']}</td>
                                    <td class='px-6 py-4'>{$row['Descripcion']}</td>
                                    <td class='px-6 py-4'>{$row['licencia']}</td>
                                    <td class='px-6 py-4'>
                                        <a href='modificar.php?id={$row['ID']}' class='text-blue-500 hover:underline'>Modificar</a>
                                    </td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4' class='px-6 py-4 text-center text-gray-500'>No se encontraron resultados</td></tr>";
                        }

                        // Total de filas para paginación
                        $total_consulta = $conexion->query("
                            SELECT COUNT(*) as total
                            FROM especialidad 
                            WHERE ID LIKE '%$busqueda%' OR Descripcion LIKE '%$busqueda%' OR licencia LIKE '%$busqueda%'
                        ");
                        $total_rows = $total_consulta->fetch_assoc()['total'];
                        $total_pages = ceil($total_rows / $rows_per_page);

                        
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Paginación -->
            <div class="mt-6 flex justify-center gap-2">
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <a href="?search=<?= htmlspecialchars($busqueda) ?>&rows_per_page=<?= $rows_per_page ?>&page=<?= $i ?>"
                       class="px-4 py-2 border <?= $i == $page ? 'bg-blue-500 text-white' : 'bg-white text-gray-700' ?> rounded-lg">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>
            </div>
        </main>
    </div>
</body>
</html>

