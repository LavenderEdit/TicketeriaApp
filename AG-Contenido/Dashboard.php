<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="Dashboard-content_stats">
            <div class="Dashboard-content-main_stats">


                <div class="Dashboard-content-main_stats_cont">
                    <div class="Dashboard-content-main_stats_cont_tickets">
                        <p>Total de Asignados: </p>
                        <span>
                            <i class="fa-solid fa-caret-down Dashboard_icon_stats"></i>
                            <p>0</p>
                        </span>
                    </div>
                    <div class="stat-value">0</div>
                </div>


                <div class="Dashboard-content-main_stats_cont">
                    <div class="Dashboard-content-main_stats_cont_tickets new_ticket-uploaded">
                        <p>Total de Asignados: </p>
                        <span>
                            <i class="fa-solid fa-caret-down Dashboard_icon_stats"></i>
                            <p>10</p>
                        </span>
                    </div>
                    <div class="stat-value">10</div>
                </div>



                <div class="Dashboard-content-main_stats_cont">
                    <div class="Dashboard-content-main_stats_cont_tickets new_ticket-delete">
                        <p>Total de Asignados: </p>
                        <span>
                            <i class="fa-solid fa-caret-down Dashboard_icon_stats"></i>
                            <p>0</p>
                        </span>
                    </div>
                    <div class="stat-value">0</div>
                </div>


                <div class="Dashboard-content-main_stats_cont">
                    <div class="Dashboard-content-main_stats_cont_tickets new_ticket-delete">
                        <p>Total de Asignados: </p>
                        <span>
                            <i class="fa-solid fa-caret-down Dashboard_icon_stats"></i>
                            <p>0</p>
                        </span>
                    </div>
                    <div class="stat-value">0</div>
                </div>


                <div class="Dashboard-content-main_stats_cont">
                    <div class="Dashboard-content-main_stats_cont_tickets new_ticket-delete">
                        <p>Total de Asignados: </p>
                        <span>
                            <i class="fa-solid fa-caret-down Dashboard_icon_stats"></i>
                            <p>0</p>
                        </span>
                    </div>
                    <div class="stat-value">0</div>
                </div>

            </div>
        </div>
    <div class="Dashboard-content-main">
        <div class="Dashboard_list-button">
            <!--- Boton Tickets-->
            <button type="button" class="list-button_select active" onclick="SubcontenidoDashboard('tickets')">
                <p>Tickets</p><span><i class="fa-solid fa-caret-right icon_list_button"></i></span>
            </button><br><!--- Ricaldi estuvo aqui-->
            <!--- Boton sucursales-->
            <button type="button" class="list-button_select" onclick="SubcontenidoDashboard('sucursales')">
                <p>Proyectos</p><span><i class="fa-solid fa-caret-right icon_list_button"></i></span>
            </button><br><!--- Ricaldi estuvo aqui otra vez-->
            <button type="button" class="list-button_select" onclick="SubcontenidoDashboard('miembros')">
                <p>Miembros</p><span><i class="fa-solid fa-caret-right icon_list_button"></i></span>
            </button>      
        </div>
        <div class="Dashboard_content_list-button">
            <!--- Contenedor de Tickets / sucursales-->
            <div id="SubcontenidoDashboard" class="Dashboard_conteinder_content_list-button">
                <?php include('../AG-Subcontenido/Files-Dashboard/File-ticket.php'); ?>
            </div>
        </div>
    </div>

</body>

</html>
