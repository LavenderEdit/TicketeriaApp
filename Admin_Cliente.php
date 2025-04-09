<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Cliente</title>
    <link rel="stylesheet" href="css/Admin_Cliente.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/Admin_Cliente.js" defer></script>
</head>

<body>
    <!--- Barra Lateral-->
    <div class="first_body active" id="barra_Lateral">
        <nav>
            <ul>
                <li class="active">
                    <button type="button" onclick="Contenido('Dashboard')">
                        <p><i class="fa-solid fa-house icon_bar"></i>Dashboard</p>
                    </button>
                </li>
                <li >
                    <button type="button" onclick="Contenido('MisTickets')">
                        <p><i class="fa-solid fa-check icon_bar"></i>Mis Tickets</p>
                    </button>
                </li>
                <li>
                    <button type="button" onclick="Contenido('Configuracion')">
                        <p><i class="fa-solid fa-gear icon_bar"></i>Configuracion</p>
                    </button>
                </li>
            </ul>
        </nav>
    </div>
    <!--- Contenedor Body-->
    <div class="second_body active" id="Body_content">
        <header>
            <div class="header">
                <!---Icono Barra Lateral: Hamburguesa-->
                <button id="Show_Sidebar" class="boton_bar"><i class="fa-solid fa-bars"></i></button> 

                <!---Icono Usuario: contenido del usuario-->
                <div class="header_content-user">
                    <button type="button" class="boton_user" onclick="Modalusuario()">A</button>
                    <!---Modal Usuario-->
                    <div class="header_content-user_data">
                        <div class="header_content-user_data_pfp">
                            <button type="button" class="boton_user_config boton_user_edit">A</button>
                        </div>
                        <div class="header_content-user_data_datos">
                            <p>Alexander:v</p>
                            <span><p>Example@gmail.com</p></span>
                        </div>
                        <div class="header_content-user_data_position"> 
                            <p>Administrador Cliente</p>
                        </div>
                        <div class="header_content-user_data_configuracion">
                            <button type="button" class="boton_1"><i class="fa-solid fa-gear profile_icon_config"></i> Configuracion</button>
                            <button type="button" class="boton_2"><i class="fa-solid fa-right-from-bracket profile_icon_config"></i> Cerrar Sesión</button>
                        </div>
                    </div>
                </div>    
            </div>
        </header>

        <main>


            <!--- contenido configuracion / Dashboard / mis tickets -->
            <div class="main" id="ContentMain">
            </div>
        
        
        </main>

        <footer></footer>
    </div>


    <!-- Modal -->
    <div class="Modal-edicion">
        <div class="box_Modal-edicion">
            <button type="button" class="BtnDetalles"><i class="fa-regular fa-folder"></i>Detalles ticket</button>
            <div></div>
            <button type="button" class="BtnEditar" onclick="CargarSubcontenidoDashboardeditModal(this)"><i class="fa-solid fa-pen-to-square"></i>Editar ticket</button>
        </div>
    </div>
    <!-- Modal de edición: editar ticket / tabla Dashboard -->
    <div class="emergent">
        <div class="overlay_emergent"></div>
        <div class="box_emergent" id="content_edition">
            <div class="box_emergent_content">
                <h1>EDITAR TICKET</h1>
                <div class="box_emergent_content-imput">
                    <div class="box_emergent_content-imput_text">
                        <div class="box_emergent_content-imput_text_codigo">
                            <p>Nombre del ticket:</p>
                            <input type="text" name="nombre" id="#" placeholder="Código de Ticket">
                        </div>
                        <div class="box_emergent_content-imput_text_fecha">
                            <p>Fecha</p>
                            <input type="date" name="fecha">
                        </div>
                        <div class="box_emergent_content-imput_text_estatus">
                            <p>Estatus</p>
                            <select name="status">
                                <option>option1</option>
                                <option>option2</option>
                                <option>option3</option>
                            </select>
                        </div>
                        <div class="box_emergent_content-imput_text_descripcion">
                            <p>Descripción</p>
                            <textarea id="message" name="message" placeholder="Escribe tu mensaje aquí..."></textarea>
                        </div>
                    </div>
                    <div class="box_emergent_content-imput_button">
                        <div class="box_emergent_content-imput_button_content">
                            <button type="button" id="btn_cancelar">Cancelar</button>
                            <button type="button" id="btn_aceptar">Actualizar</button>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
