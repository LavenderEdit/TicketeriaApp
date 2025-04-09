// ------------------- Barra Lateral - Desplazamiento
const ContenidoMain = document.getElementById('Body_content');
const BarraLateral = document.getElementById('barra_Lateral');
const BtnBarraLateral = document.getElementById('Show_Sidebar');

BtnBarraLateral.addEventListener("click", () => {
    BarraLateral.classList.toggle("active");
    ContenidoMain.classList.toggle("active");
});
let resizeTimeout;
window.addEventListener("resize", () => {
    BarraLateral.style.transition = "none";
    ContenidoMain.style.transition = "none";
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
        BarraLateral.style.transition = "left 0.3s ease";
        ContenidoMain.style.transition = "transform 0.3s ease, width 0.3s ease";
    }, 100);
});


// ------------------- Barra Lateral - active
const items = document.querySelectorAll(".first_body nav ul li");

items.forEach(item => {
    item.addEventListener("click", () => {
        items.forEach(i => i.classList.remove("active"));
        item.classList.add("active");
    });
});



// ------------------- Barra Lateral: Contenido
var URLContenido = "/TickeriaApp/AC-Contenido/";
var URLSubContenido = "/TickeriaApp/AC-Subcontenido/";


function Contenido(tipo) {
    // Definimos la URL según el contenido que se desea cargar
    var url;
    if (tipo === 'Dashboard') {
        url = URLContenido + "Dashboard.php";
    } else if (tipo === 'MisTickets') {
        url = URLContenido + "MisTickets.php";
    } else if (tipo === 'Configuracion') {
        url = URLContenido + "Configuracion.php";
    }

    // Realizamos la solicitud AJAX
    return $.ajax({
        type: "POST",
        url: url,
        data: {},  // Si necesitas pasar datos, agréguelos aquí
        success: function(datos) {
            // Si la respuesta es exitosa, cargamos el contenido
            $('#ContentMain').html(datos);
        },
        error: function(xhr, status, error) {
            // Mostramos más información sobre el error
            console.error("Error AJAX:", status, error);
            console.error("Respuesta del servidor:", xhr.responseText);
            $('#ContentMain').html('<p>Hubo un error al cargar los datos.</p>');
        }
    });
}


//------------------- Modal usuario
function Modalusuario() {
    const userData = document.querySelector('.header_content-user_data');
    userData.classList.toggle('select');
}

document.addEventListener('click', function(event) {
    const userData = document.querySelector('.header_content-user_data');
    const buttonUser = document.querySelector('.boton_user');
    
    // Verificamos si el clic fue fuera del modal y del botón
    if (!userData.contains(event.target) && event.target !== buttonUser) {
        userData.classList.remove('select');
    }
});


// ------------------- Contenido: Subcontenido
//                     Cargar: tickets / sucrusales (Dashboard)

function SubcontenidoDashboard(tipo) {
    // Definimos la URL según el contenido que se desea cargar
    var url;
    if (tipo === 'sucursales') {
        url = URLSubContenido + "Files-Dashboard/File-sucursales.php";
    } else if (tipo === 'tickets') {
        url = URLSubContenido + "Files-Dashboard/File-ticket.php";
    }

    // Realizamos la solicitud AJAX
    return $.ajax({
        type: "POST",
        url: url,
        data: {},  // Si necesitas pasar datos, agréguelos aquí
        success: function(datos) {
            // Si la respuesta es exitosa, cargamos el contenido
            $('#SubcontenidoDashboard').html(datos);

            // ------------------- Cargar: Botones tickets / sucursales - active

            document.querySelectorAll('.list-button_select').forEach(button => {
                button.classList.remove('active');
            });
            const clickedButton = Array.from(document.querySelectorAll('.list-button_select'))
                .find(button => button.textContent.trim() === tipo.charAt(0).toUpperCase() + tipo.slice(1));

            if (clickedButton) {
                clickedButton.classList.add('active');
            }

        },
        error: function(xhr, status, error) {
            // Mostramos más información sobre el error
            console.error("Error AJAX:", status, error);
            console.error("Respuesta del servidor:", xhr.responseText);
            $('#SubcontenidoDashboard').html('<p>Hubo un error al cargar los datos.</p>');
        }
    });
}


// ------------------- Cargar: tickets - mostrar texto
function CargarSubcontenidoDashboardtext(button) {
    // Encontrar el contenedor '.file-dashboard-tickets_container' más cercano al botón.
    var ticketContainer = button.closest('.file-dashboard-tickets_container'); 

    if (ticketContainer) {
        // Alternamos la clase 'show' en el contenedor.
        var contentContainer = ticketContainer.querySelector('.file-dashboard-tickets_text');
        if (contentContainer) {
            contentContainer.classList.toggle("show");
        }
    } else {
        console.log("No se encontró el contenedor del ticket.");
    }
}


// ------------------- Cargar: tickets - mostrar modal editar ticket
function CargarSubcontenidoDashboardedit(button) {
    // Encuentra el modal por su clase o ID
    var modal = document.querySelector('.emergent');
    
    if (modal) {
        // Agregar la clase 'active' al modal para hacerlo visible
        modal.classList.add('active');

        // Bloquear el scroll del body mientras el modal está activo
        document.body.classList.add('body_locked');
        
        console.log("Modal abierto correctamente");
    } else {
        console.log("No se encontró el modal.");
    } 
}

// Agregar evento al botón de cancelar para cerrar el modal
document.getElementById('btn_cancelar').addEventListener('click', function() {
    var modal = document.querySelector('.emergent');
    
    if (modal) {
        // Eliminar la clase 'active' para ocultar el modal
        modal.classList.remove('active');

        // Restaurar el estado del body
        document.body.classList.remove('body_locked');

        console.log("Modal cerrado correctamente");
    }
});

// Agregar evento para hacer desaparecer el modal cuando se haga clic en el overlay
document.querySelector('.overlay_emergent').addEventListener('click', function() {
    var modal = document.querySelector('.emergent');
    
    if (modal) {
        // Eliminar la clase 'active' para ocultar el modal cuando se hace clic en el overlay
        modal.classList.remove('active');
        
        // Restaurar el estado del body
        document.body.classList.remove('body_locked');
        
        console.log("Modal cerrado correctamente desde el overlay");
    }
});


// ------------------- Contenido: Subcontenido
//                     Cargar: Mis Tickets

function SubcontenidoMisTickets(tipo) {
    // Definimos la URL según el contenido que se desea cargar
    const tabla = document.querySelector(".tickets_third-row_content-data");



    var url;
    if (tipo === 'tabla') {
        url = URLSubContenido + "Files-Tickets/File-Tabla.php";
    } else if (tipo === 'blog') {
        url = URLSubContenido + "Files-Tickets/File-Blog.php";
    } else if (tipo === 'calendario') {
        url = URLSubContenido + "Files-Tickets/File-Calendario.php";
    }

    // Realizamos la solicitud AJAX
    return $.ajax({
        type: "POST",
        url: url,
        data: {},  // Si necesitas pasar datos, agréguelos aquí
        success: function(datos) {
            // Si la respuesta es exitosa, cargamos el contenido
            $('#SubcontenidoMisTickets').html(datos);

            if (tabla) {
                tabla.classList.remove('no-scroll'); // Eliminamos la clase que oculta el scroll
            }

            // ------------------- Cargar: Botones primera fila - active

            document.querySelectorAll('.tickets_first-row button').forEach(button => {
                button.classList.remove('active');
            });
            const clickedButton1 = Array.from(document.querySelectorAll('.tickets_first-row button'))
                .find(button => button.textContent.trim() === tipo.charAt(0).toUpperCase() + tipo.slice(1));

            if (clickedButton1) {
                clickedButton1.classList.add('active');
            }
        },
        error: function(xhr, status, error) {
            // Mostramos más información sobre el error
            console.error("Error AJAX:", status, error);
            console.error("Respuesta del servidor:", xhr.responseText);
            $('#SubcontenidoMisTickets').html('<p>Hubo un error al cargar los datos.</p>');
        }
    });
}



// ------------------- Cargar contenido y subcontenido en orden
$(document).ready(function() {
    Contenido('Dashboard')  // Primero cargamos el contenido principal
        .then(() => {
            return SubcontenidoDashboard('tickets');  // Después cargamos el subcontenido del Dashboard
        })
        .then(() => {
            return SubcontenidoMisTickets('tabla');  // Finalmente cargamos el subcontenido de Mis Tickets
        })
        .catch((error) => {
            console.error("Error durante la carga de los contenidos:", error);
        });
});


// ----------------------------------- Modal tickets - tabla listo :'v
function toggleActiveClass(button) {
    const buttons = document.querySelectorAll('.Mostrar_Modal-edicion');
    buttons.forEach((btn) => {
        btn.classList.remove('active');
    });
    button.classList.add('active');
}

// Función para mostrar el modal y agregar la clase active
function MostrarContenidoModaledicion(button) {
    const modal = document.querySelector('.Modal-edicion');
    const tabla = document.querySelector(".tickets_third-row_content-data"); // Seleccionamos la tabla

    // Si el botón ya tiene la clase active, la quitamos junto con la clase del modal
    if (button.classList.contains('active')) {
        modal.classList.remove('active');
        button.classList.remove('active');
        tabla.classList.remove('no-scroll'); // Quitamos la clase .no-scroll de la tabla cuando el modal se cierra
    } else {
        // Si el botón no tiene la clase active, agregar la clase active al modal y al botón
        modal.classList.add('active');
        toggleActiveClass(button);

        // Añadimos la clase .no-scroll a la tabla cuando el modal es visible
        tabla.classList.add('no-scroll');
        
        // Llamamos a la función para posicionar el modal
        positionModal(button, modal);
    }
}

// Función para posicionar el modal dependiendo de la ubicación del botón
function positionModal(button, modal) {
    const buttonRect = button.getBoundingClientRect(); // Obtenemos las coordenadas del botón
    const modalHeight = modal.offsetHeight; // Obtenemos la altura del modal
    const windowHeight = window.innerHeight; // Obtenemos la altura de la ventana

    // Posicionamos el modal debajo del botón, verificamos si cabe
    let topPosition = buttonRect.bottom + window.scrollY;

    // Si no cabe debajo, lo posicionamos arriba
    if (topPosition + modalHeight > windowHeight) {
        topPosition = buttonRect.top - modalHeight + window.scrollY;
    }

    // Posicionamos el modal en el eje X centrado con respecto al botón
    let leftPosition = buttonRect.left + (buttonRect.width / 2) - (modal.offsetWidth / 2) + window.scrollX;

    // Ajustamos el modal un poco más a la izquierda
    leftPosition -= 60; // Cambia el valor de 20 para moverlo más o menos a la izquierda

    // Aplicamos las posiciones calculadas
    modal.style.top = `${topPosition}px`;
    modal.style.left = `${leftPosition}px`;
}

// Agregar el evento de clic a cada botón
const buttons = document.querySelectorAll('.Mostrar_Modal-edicion');
buttons.forEach((button) => {
    button.addEventListener('click', (event) => {
        // Evitar que el clic del botón se propague
        event.stopPropagation();
        MostrarContenidoModaledicion(button);
    });
});

// Función para manejar clic fuera del modal y cerrar el modal
document.addEventListener('click', (event) => {
    const modal = document.querySelector('.Modal-edicion');
    const buttons = document.querySelectorAll('.Mostrar_Modal-edicion');
    const tabla = document.querySelector(".tickets_third-row_content-data"); // Seleccionamos la tabla
    
    // Verificamos si el clic es fuera del modal y fuera de los botones
    if (!modal.contains(event.target) && !Array.from(buttons).some(btn => btn.contains(event.target))) {
        modal.classList.remove('active');  // Cerramos el modal si el clic es fuera
        buttons.forEach((button) => button.classList.remove('active'));  // Eliminamos la clase active de los botones
        
        // Verificamos si la tabla existe antes de intentar modificar su classList
        if (tabla) {
            tabla.classList.remove('no-scroll'); // Quitamos la clase .no-scroll de la tabla cuando el modal se cierra
        }
    }
});


//-------------------------------------------
function CargarSubcontenidoDashboardeditModal(button) {
    // Eliminar la clase 'active' de todos los elementos relevantes
    const buttons = document.querySelectorAll('.Mostrar_Modal-edicion');
    buttons.forEach((btn) => {
        btn.classList.remove('active');
    });

    const modal = document.querySelector('.Modal-edicion');
    modal.classList.remove('active'); // Eliminar la clase 'active' del modal también

    const tabla = document.querySelector(".tickets_third-row_content-data");
    tabla.classList.remove('no-scroll'); // Eliminar la clase 'no-scroll' de la tabla si es necesario

    // Aquí puedes agregar la lógica para cargar el subcontenido en el modal, si es necesario
    // Por ejemplo, cargar dinámicamente contenido en el modal
    console.log("Subcontenido cargado y clase 'active' eliminada.");
    // Agregar la clase 'active' al nuevo modal y bloquear el scroll
    var modalEdit = document.querySelector('.emergent');
    if (modalEdit) {
        modalEdit.classList.add('active');
        document.body.classList.add('body_locked'); // Bloquea el scroll
    }
    
}