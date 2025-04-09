<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Tickets</title>


</head>

<body>
    <div class="tickets-content-main">
        <!-- Primer contenedor de botones (con contenido que se carga) -->
        <div class="tickets_first-row">
            <button type="button" class="tickets_first-row_table active" onclick="SubcontenidoMisTickets('tabla')">Tabla</button>
            <button type="button" class="tickets_first-row_blog" onclick="SubcontenidoMisTickets('blog')">Blog</button>
            <button type="button" class="tickets_first-row_calendar" onclick="SubcontenidoMisTickets('calendario')">Calendario</button>
        </div>

        <!-- Segundo contenedor de botones (solo cambia la clase active) -->
        <div class="tickets_second-row">
            <button type="button" class="tickets_second-row_tasks active"><i class="fa-solid fa-list-check tickets_second-row_icons"></i>Tareas</button>
            <button type="button" class="tickets_second-row_assigned"><i class="fa-solid fa-user tickets_second-row_icons"></i>Asignado</button>
            <button type="button" class="tickets_second-row_branche"><i class="fa-solid fa-folder-closed tickets_second-row_icons"></i>Sucursale</button>
            <button type="button" class="tickets_second-row_date"><i class="fa-solid fa-calendar-days tickets_second-row_icons"></i>Fecha</button>
        </div>

        <!-- Contenedor de información de los tickets -->
        <div class="tickets_third-row">
            <div class="tickets_third-row_content-data" id="SubcontenidoMisTickets">
                <?php include('../AC-Subcontenido/Files-Tickets/File-Tabla.php'); ?>
            </div>
        </div>

    </div>
</body>

</html>
