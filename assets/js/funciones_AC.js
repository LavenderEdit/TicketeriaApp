document.addEventListener("DOMContentLoaded", () => {
    // Inicialización de las funciones
    inicializarBarraLateral();
    inicializarContenidoPrincipal();
    inicializarBotonesCargaContenido();

    mostrarUsuario();
});

//----------- Funcion de Usuario -------------------
function mostrarUsuario() {
    // Seleccionamos los elementos
    const BotonUser = document.querySelector(".boton_user"); 
    const ContenedorUser = document.querySelector(".header_content-user_data");
    const Boton1 = document.querySelector(".boton_1"); 
    const Boton2 = document.querySelector(".boton_2");

    console.log("hola");

    // Asegurarnos de que los elementos existen antes de agregar los eventos
    if (BotonUser && ContenedorUser && Boton1 && Boton2) {
        // Agregar el evento al botón para mostrar o esconder el contenedor
        BotonUser.addEventListener('click', (e) => {
            e.stopPropagation(); // Evita que el clic en el botón se propague al documento
            // Alternar la clase 'select' en el contenedor y el botón
            ContenedorUser.classList.toggle('select');
            BotonUser.classList.toggle('select');
        });

        // Agregar un evento para cerrar cuando se hace clic en los botones 1 o 2
        Boton1.addEventListener('click', (e) => {
            e.stopPropagation(); // Evita la propagación del clic
            ContenedorUser.classList.remove('select');
            BotonUser.classList.remove('select');
        });

        Boton2.addEventListener('click', (e) => {
            e.stopPropagation(); // Evita la propagación del clic
            ContenedorUser.classList.remove('select');
            BotonUser.classList.remove('select');
        });

        // Agregar un evento de clic al documento para cerrar cuando se hace clic fuera del contenedor o botones
        document.addEventListener('click', (e) => {
            // Verificamos si el clic no fue dentro del contenedor o en los botones
            if (!ContenedorUser.contains(e.target) && !BotonUser.contains(e.target) && !Boton1.contains(e.target) && !Boton2.contains(e.target)) {
                ContenedorUser.classList.remove('select');
                BotonUser.classList.remove('select');
            }
        });
    } else {
        console.error("Uno o más elementos no fueron encontrados");
    }
}





// ----------- Barra Lateral (first_body) -----------
function inicializarBarraLateral() {
    const button = document.getElementById("showButton");
    const firstBody = document.getElementById("bar_visible");
    const secondBody = document.getElementById("main_content");

    let isSidebarVisible = true;

    // Configurar estilos iniciales para que la barra aparezca abierta
    firstBody.style.left = "0";
    secondBody.style.transform = "translateX(250px)";
    secondBody.style.width = "calc(100vw - 250px)";

    // Evento para mostrar/ocultar la barra lateral
    button.addEventListener("click", () => {
        toggleSidebar(firstBody, secondBody, isSidebarVisible);
        isSidebarVisible = !isSidebarVisible;
    }); 

    // Agregar eventos a los enlaces de la barra lateral
    agregarEventosBarraLateral();
}

function toggleSidebar(firstBody, secondBody, isSidebarVisible) {
    if (isSidebarVisible) {
        firstBody.style.left = "-250px";
        secondBody.style.transform = "translateX(0)";
        secondBody.style.width = "100vw";
    } else {
        firstBody.style.left = "0";
        secondBody.style.transform = "translateX(250px)";
        secondBody.style.width = "calc(100vw - 250px)";
    }
}

function agregarEventosBarraLateral() {
    const dashboard = document.getElementById('link_dashboard');
    const tickets = document.getElementById('link_tickets');
    const links = document.querySelectorAll(".fisrt_body nav ul li");

    dashboard.addEventListener('click', function(event) {
        cargarContenidoBarraLateral('html-files_AC/Dashboard.html');
    });
    tickets.addEventListener('click', function(event) {
        cargarContenidoBarraLateral('html-files_AC/tickets.html');
    });

    links.forEach(link => {
        link.addEventListener("click", function() {
            //  Eliminar la clase "active" de todos
            links.forEach(l => l.classList.remove("active"));

            // Agregar la clase "active" al elemento clickeado
            this.classList.add("active");
        });
    });

    // Cargar contenido inicial por defecto
    cargarContenidoBarraLateral('html-files_AC/Dashboard.html');
}


function cargarContenidoBarraLateral(url) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var contenido = document.getElementById('content_barra-lateral');
            contenido.innerHTML = xhr.responseText;
            activarEventos();
        }
    };
    xhr.send();
}

// ----------- Funciones de Modal (Main Body) -----------
function inicializarContenidoPrincipal() {
    activarEventos();
}

function activarEventos() {
    const btnShow = document.querySelector(".Btn_show");
    const mainText = document.querySelector(".file-dashboard-tickets_text");

    if (btnShow) {
        btnShow.addEventListener("click", () => {
            mainText.classList.toggle("show");
            
        });
    }
    manejarBotonesDashboard();
    inicializarBotonesCargaContenido();
}

function manejarModalEmergente() {
    const nuevoBtnEditar = document.querySelector(".Btn_editar");

    const emergent = document.querySelector(".emergent");
    const overlay = document.querySelector(".overlay_emergent");
    const btnCancelar = emergent ? emergent.querySelector("button") : null;
    const body = document.body;

    if (!emergent) {
        console.error("No se encontró el modal emergent.");
        return;
    }

    const abrirEmergente = () => {
        emergent.classList.add("active");
        body.classList.add("body_locked");
    };

    const cerrarEmergente = () => {
        nuevoBtnEditar.classList.remove("show"); 
        emergent.classList.remove("active");
        body.classList.remove("body_locked");
    };

    //  Agregar eventos sin duplicarlos
    if (btnCancelar) {
        btnCancelar.removeEventListener("click", cerrarEmergente);
        btnCancelar.addEventListener("click", cerrarEmergente);
    }

    if (overlay) {
        overlay.removeEventListener("click", cerrarEmergente);
        overlay.addEventListener("click", cerrarEmergente);
    }

    abrirEmergente();
}


function manejarBotonesDashboard() {
    var contenedor = document.querySelector('.Dashboard_list-button');

    // Verificar si el contenedor existe antes de agregar el evento
    if (!contenedor) {
        console.error("No se encontró '.Dashboard_list-button'. Verifica que el elemento exista en el HTML.");
        return; // Detiene la ejecución de la función si no encuentra el elemento
    }

    contenedor.addEventListener('click', function(event) {
        var boton = event.target.closest(".list-button_select");
        if (!boton) return;  // Si no se encuentra, salir de la función

        // Desmarcar todos los botones antes de marcar el seleccionado
        document.querySelectorAll(".list-button_select").forEach(btn => btn.classList.remove("active"));

        // Añadir la clase activa al botón seleccionado
        boton.classList.add("active");
    });
}

// ----------- Función para cargar el contenido de los botones de Tickets y Sucursales -----------

// Asignar eventos a los botones de cargar contenido (Tickets y Sucursales)
function inicializarBotonesCargaContenido() {
    const btnFileTickets = document.getElementById("Btn_File-tickets");
    const btnFileSucursales = document.getElementById("Btn_File-sucursales");

    if (btnFileTickets) {
        btnFileTickets.addEventListener("click", function(event) {
            cargarContenidoEnDashboard('html-files_AC/Files-Dashboard/File-ticket.html'); // Ruta al archivo de Tickets
        });
    }

    if (btnFileSucursales) {
        btnFileSucursales.addEventListener("click", function(event) {
            cargarContenidoEnDashboard('html-files_AC/Files-Dashboard/File-sucursales.html'); // Ruta al archivo de Sucursales
        });
    }
    cargarContenidoEnDashboard('html-files_AC/Files-Dashboard/File-ticket.html')
}

// Función para cargar contenido en el dashboard
function cargarContenidoEnDashboard(url) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var contenido = document.getElementById('content_list-button');
            contenido.innerHTML = xhr.responseText;

            // Solo ejecutar si el elemento existe
            if (document.querySelector('.Dashboard_list-button')) {
                manejarBotonesDashboard();
            }

            activarEventosFileTickets(); // Llamamos a la función aquí
        }
    };
    xhr.send();
}

// ----------- Funciones Específicas para File-ticket.html -----------

    function activarEventosFileTickets() {
        // Activar el evento para los botones de mostrar/ocultar texto
        const btnsShow = document.querySelectorAll(".Btn_show");
        const mainTexts = document.querySelectorAll(".file-dashboard-tickets_text");

        btnsShow.forEach((btnShow, index) => {
            btnShow.addEventListener("click", () => {
                mainTexts[index].classList.toggle("show");
                btnShow.classList.toggle("show");
            });
        });

        // Seleccionar todos los botones de edición
        const btnsEditar = document.querySelectorAll(".Btn_editar");

        btnsEditar.forEach((btnEditar) => {
            // Eliminar eventos previos si existían
            btnEditar.removeEventListener("click", manejarModalEmergente);

            // Asignar el evento correctamente
            btnEditar.addEventListener("click", () => {
                manejarModalEmergente();
                btnEditar.classList.toggle("show"); // Ahora alterna correctamente
                console.log("aqui")
            });
        });
    }


