<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="Dashboard-content-main">
        <div class="Dashboard_list-button">
            <!--- Boton Tickets-->
            <button type="button" class="list-button_select active" onclick="SubcontenidoDashboard('tickets')">
                <p>Tickets</p><span><i class="fa-solid fa-caret-right icon_list_button"></i></span>
            </button><br><!--- Ricaldi estuvo aqui-->
            <!--- Boton sucursales-->
            <button type="button" class="list-button_select" onclick="SubcontenidoDashboard('sucursales')">
                <p>Sucursales</p><span><i class="fa-solid fa-caret-right icon_list_button"></i></span>
            </button>    
        </div>
        <div class="Dashboard_content_list-button">
            <!--- Contenedor de Tickets / sucursales-->
            <div id="SubcontenidoDashboard" class="Dashboard_conteinder_content_list-button">
                <?php include('../AC-Subcontenido/Files-Dashboard/File-ticket.php'); ?>

            </div>
        </div>
    </div>

</body>

</html>
