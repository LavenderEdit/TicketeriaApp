<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="configuracion-content-main">
        <div class="configuracion-content-main_first-row">
            <div class="configuracion-content-main_first-row-user"><p>Noemi santos</p></div><!--- Nombre del usuario -->
            <div class="configuracion-content-main_first-row-code">
                <p>Código de Invitación:</p>
                <div class="configuracion-content-main_first-row-code_invite">
                    <p>https://dashboar-syr.vercel.app/workspaces/675b1b7f0001</p><!-- texto copiable / invitacion -->
                    <button type="button"><i class="fa-regular fa-file"></i></button><!-- icono que debe realizar el cipy de codigo mediante una funcion -->
                </div>
            </div>
        </div>
        

        <div class="configuracion-content-main_second-row">
            <div class="configuracion-content-main_second-row_first-row"><p>Workspace</p></div>
            <div class="configuracion-content-main_second-row_second-row">
                <div class="configuracion-content-main_second-row_second-row_first-column">
                    <p>Nombre del Workspace</p>
                    <div class="fisrt-column_content">
                        <p>Soporte y mantenimiento</p><!-- Nombre del WorkSpace -->
                    </div>
                </div>
                <div class="configuracion-content-main_second-row_second-row_second-column">
                    <p>Icono del WorkSpace</p>
                    <div class="second-column_content">
                        <div class="second-column_content_icon">
                            <div class="second-column_content_icon_edit">
                                <i class="fa-solid fa-image"></i>
                                <button type="button">Editar</button>
                            </div>
                            <p>JPG,PNG,SVG or JPEG, max 1MB</p>
                        </div>
                    </div>
                </div>
                <div class="configuracion-content-main_second-row_second-row_third-column">
                    <p>Eliminar WorkSpace</p>
                    <div class="third-column_content">
                        <button type="button">Eliminar</button>
                        <p>Eliminar este workspace es irreversible y eliminará todos los proyectos y tareas asociados.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="configuracion-content-main_third-row">
            <div class="configuracion-content-main_third-row_first-row">
                <p>Lista de Usuarios WorkSpace</p>
            </div>
            <div class="configuracion-content-main_third-row_second-row">
                <div class="configuracion-content-main_third-row_second-row" id="SubcontenidoConfiguracion">
                    <?php include('../AG-Subcontenido/Files-Configuracion/File-List.php'); ?>
                 
                </div>
            </div>
        </div>

    </div>
</body>
</html>