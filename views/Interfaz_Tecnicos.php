<?php
// Conexión y obtención de datos
require_once '../php/ListarTecnicos.php';
require_once '../conexion/conexion.php';

use TicketingSystem\PHP\ListarTecnicos;
use TicketingSystem\Conexion\conexion;

$conexion = new Conexion();

$listarTecnicos = new ListarTecnicos($conexion);
$tecnicos = $listarTecnicos->ObtenerTecnicos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gestión de Técnicos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/styles-tecnicos.css">
</head>
<body class="bg-gray-200">
    <div class="container">
        <!-- Contenedor principal -->
        <div id="menu-container" class="transition-all duration-300">
            <!-- Encabezado con botón de menú -->
            <header id="menu-header" class="bg-[#1d5ab3] text-white flex items-center justify-between p-4 fixed top-0 left-0 w-full">
                <button id="toggle-menu" class="text-white text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="text-xl font-semibold">Sistema de Gestión de Técnicos</h1>
            </header>

            <!-- Menú lateral -->
            <aside id="sidebar" class="sidebar bg-[#1d5ab3] text-white">
                <ul>
                    <li>
                        <a href="#" class="flex items-center p-3 hover:bg-blue-600">
                            <i class="fas fa-home w-6 text-center"></i>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 hover:bg-blue-600">
                            <i class="fas fa-ticket-alt w-6 text-center"></i>
                            <span class="ml-3">Mis Tickets</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="flex items-center p-3">
                            <i class="fas fa-users-cog w-6 text-center"></i>
                            <span class="ml-3">Tecnicos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 hover:bg-blue-600">
                            <i class="fas fa-cog w-6 text-center"></i>
                            <span class="ml-3">Configuración</span>
                        </a>
                    </li>
                </ul>
            </aside>
        </div>

        <!-- Contenido principal -->
        <main class="main-content">
            <!-- Título y botón -->
            <header>
                <h1><i class="fas fa-users-cog"></i> Técnicos Activos</h1>
            </header>

            <!-- Filtros -->
            <div class="filters">
                <input type="text" placeholder="Buscar por nombre">
                <select>
                    <option value="">Filtrar por especialidad</option>
                    <option value="redes">Redes</option>
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                </select>
            </div>
            <!--Primer Cuadro-->
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-300">
            <!-- Primera fila de botones -->
            <div class="flex space-x-3">
                <button class="px-4 py-2 bg-gray-300 text-gray-800 rounded-full">Tabla</button>
                <button class="px-4 py-2 bg-gray-300 text-gray-800 rounded-full">Blog</button>
                <button class="px-4 py-2 bg-gray-300 text-gray-800 rounded-full">Calendario</button>
            </div>

            <!-- Línea divisoria -->
            <div class="w-full border-t border-black-200 my-2"></div>

            <!-- Segunda fila de botones con íconos -->
            <div class="flex space-x-3">
                <button class="flex items-center space-x-2 px-4 py-2 bg-gray-300 text-gray-800 rounded-full">
                    <span>☰</span>
                    <span>Tareas</span>
                </button>
                <button class="flex items-center space-x-2 px-4 py-2 bg-gray-300 text-gray-800 rounded-full">
                    <span>👤</span>
                    <span>Asignados</span>
                </button>
                <button class="flex items-center space-x-2 px-4 py-2 bg-gray-300 text-gray-800 rounded-full">
                    <span>📁</span>
                    <span>Proyectos</span>
                </button>
                <button class="flex items-center space-x-2 px-4 py-2 bg-gray-300 text-gray-800 rounded-full">
                    <span>📅</span>
                    <span>Fechas</span>
                </button>
            </div>

            <!-- Línea divisoria -->
            <div class="w-full border-t border-black-200 my-2"></div>

            <!--Cuadros dentro de Otro-->
            <div class="bg-gray-200 p-6 rounded-lg shadow-lg border border-gray-300">
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-300">

                <!-- Tabla de Técnicos -->
                <div class="overflow-x-auto">
                    <table class="tech-table w-full">
                        <thead>
                            <tr>
                                <th onclick="sortTable(0)">Nombre <span class="sort-indicator"></span> ⬆⬇</th>
                                <th onclick="sortTable(1)">Teléfono <span class="sort-indicator"></span> ⬆⬇</th>
                                <th onclick="sortTable(2)">Email <span class="sort-indicator"></span> ⬆⬇</th>
                                <th onclick="sortTable(3)">Tipo de Usuario<span class="sort-indicator"></span> ⬆⬇</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="techTableBody">
                            <?php foreach ($tecnicos as $tecnico): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($tecnico->Nombre); ?></td>
                                <td><?php echo htmlspecialchars($tecnico->Telefono); ?></td>
                                <td><?php echo htmlspecialchars($tecnico->Email); ?></td>
                                <td><?php echo htmlspecialchars($tecnico->TipoUsuario); ?></td>
                                <td>
                                    <button class="btn-action edit" onclick="editTecnico(<?php echo htmlspecialchars(json_encode($tecnico)); ?>)">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-action delete" onclick="deleteTecnico(<?php echo htmlspecialchars($tecnico->Nombre); ?>)">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php if (empty($tecnicos)): ?>
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-gray-500">
                                        No se encontraron técnicos registrados
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../js/script-tecnicos.js"></script>
</body>
</html>