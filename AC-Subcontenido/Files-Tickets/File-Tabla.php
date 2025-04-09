<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="files-archivos_file-mistickets-content">
        <div class="files-archivos_file-mistickets-content_table">
            <table class="files-archivos_file-mistickets-content_table_conteiner">
                <thead>
                    <tr><!--- Table: Header-->
                        <th><p>Nombre del Ticket</p></th>
                        <th><p>Provincia</p></th>
                        <th><p>Departamento</p></th>
                        <th><p>Cliente</p></th>
                        <th><p>Ubicacion</p></th>
                        <th><p>Detalle del Servicio</p></th>
                        <th><p>Motivo del Servicio</p></th>
                        <th><p>Tipo de Equipo</p></th>
                        <th><p>Proveedor</p></th>
                        <th><p style="padding-left: 10px;">Proyecto</p></th>
                        <th><p style="padding-left: 10px;">Asignado</p></th>
                        <th><p>Fecha</p></th>
                        <th><p>Estatus</p></th>
                        <th></th>
                        
                    </tr>
                </thead>
                
                <tbody><!--- Table: body-->
                    <tr><!--- Asignar Roles a su espacio en la tabla-->
                        <td><p>Test ticket editado</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>BANCO_FALABELLA</p></td>
                        <td><p>Av. Example</p></td>
                        <td><p>Example</p></td>
                        <td><p>Example</p></td>
                        <td><p>Example</p></td>
                        <td><p>S&R</p></td>

                        <td><!-- span: icono - inicial del proyecto / p: nombre del proyecto -->
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td><!-- span: inicial del usuario / p: nombre del usaurio -->
                            <div class="content-tabla_usuario"><span></span><p>User</p></div>
                        </td>
                        <td><!-- p: fecha en la que se crreo el ticket -->
                            <div class="content-tabla_fecha"><p>December 20th, 2024</p></div>
                        </td>
                        <td><!-- Estado del tickets: reservado / progreso  // con PHP evaluar el estado y con JS se agregue la clase-->
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>


                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></td>
                    </tr>
                    <tr>
                        <td><p>Test produccion</p></td>
                        <td><p>HUANUCO</p></td>
                        <td><p>HUANUCO</p></td>
                        <td><p>SAGA_FALABELLA</p></td>
                        <td><p>Av. Example</p></td>
                        <td><p>Example</p></td>
                        <td><p>Example</p></td>
                        <td><p>Example</p></td>
                        <td><p>NOMBRE RANDOM SUPER LARGO</p></td>

                        <td><!-- span: icono - inicial del proyecto / p: nombre del proyecto -->
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td><!-- span: inicial del usuario / p: nombre del usaurio -->
                            <div class="content-tabla_usuario"><span></span><p>User</p></div>
                        </td>
                        <td><!-- p: fecha en la que se crreo el ticket -->
                            <div class="content-tabla_fecha"><p>December 19th, 2024</p></div>
                        </td>
                        <td><!-- Estado del tickets: reservado / progreso  // con PHP evaluar el estado y con JS se agregue la clase-->
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>


                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>

                    <!--- contenido borrable-->
                    <tr>
                        <td><p>Desarrollo de nuevo sistema</p></td>
                        <td><p>LIMA</p></td>
                        <td><p>LIMA</p></td>
                        <td><p>FALABELLA</p></td>
                        <td><p>Calle Ficticia 123</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>ALGO LARGO Y ALEATORIO</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario1</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>January 10th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de integración</p></td>
                        <td><p>CUSCO</p></td>
                        <td><p>CUSCO</p></td>
                        <td><p>TRADEMARK</p></td>
                        <td><p>Avenida Principal</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>DESCRIPCIÓN LARGA ALEATORIA</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario2</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>February 15th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Modificación en base de datos</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>BANCO_NACIONAL</p></td>
                        <td><p>Calle Ejemplo</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>ROL DE SISTEMA</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario3</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>March 20th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Optimización del servidor</p></td>
                        <td><p>TRUJILLO</p></td>
                        <td><p>TRUJILLO</p></td>
                        <td><p>MINERA</p></td>
                        <td><p>Calle Secundaria</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>CONFIGURACIÓN DE SERVIDORES</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario4</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>April 5th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Desarrollo de nueva API</p></td>
                        <td><p>PIURA</p></td>
                        <td><p>PIURA</p></td>
                        <td><p>TELECOMUNICACIONES</p></td>
                        <td><p>Av. Innovación</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>API INTEGRADA</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario5</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>May 12th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de producción 1</p></td>
                        <td><p>LIMA</p></td>
                        <td><p>LIMA</p></td>
                        <td><p>SALDO_BANCO</p></td>
                        <td><p>Calle Nueva</p></td>
                        <td><p>Cliente A</p></td>
                        <td><p>Detalle A</p></td>
                        <td><p>Descripción A</p></td>
                        <td><p>Nombre Largo A</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Grupo X</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Admin</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>January 1st, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de producción 2</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>BANCO_FALABELLA</p></td>
                        <td><p>Avenida Sol</p></td>
                        <td><p>Cliente B</p></td>
                        <td><p>Detalle B</p></td>
                        <td><p>Descripción B</p></td>
                        <td><p>Nombre Largo B</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Banco Y</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>User B</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>January 5th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 1</p></td>
                        <td><p>TRUJILLO</p></td>
                        <td><p>TRUJILLO</p></td>
                        <td><p>SANTANDER</p></td>
                        <td><p>Calle Real</p></td>
                        <td><p>Cliente C</p></td>
                        <td><p>Detalle C</p></td>
                        <td><p>Descripción C</p></td>
                        <td><p>Nombre Largo C</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto Z</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario C</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>February 1st, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 2</p></td>
                        <td><p>CHICLAYO</p></td>
                        <td><p>CHICLAYO</p></td>
                        <td><p>BBVA</p></td>
                        <td><p>Avenida del Sol</p></td>
                        <td><p>Cliente D</p></td>
                        <td><p>Detalle D</p></td>
                        <td><p>Descripción D</p></td>
                        <td><p>Nombre Largo D</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto A</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario D</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>February 5th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 3</p></td>
                        <td><p>PIURA</p></td>
                        <td><p>PIURA</p></td>
                        <td><p>INTERBANK</p></td>
                        <td><p>Calle Principal</p></td>
                        <td><p>Cliente E</p></td>
                        <td><p>Detalle E</p></td>
                        <td><p>Descripción E</p></td>
                        <td><p>Nombre Largo E</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto B</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario E</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>March 1st, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 4</p></td>
                        <td><p>ICA</p></td>
                        <td><p>ICA</p></td>
                        <td><p>SCOTIABANK</p></td>
                        <td><p>Calle Azul</p></td>
                        <td><p>Cliente F</p></td>
                        <td><p>Detalle F</p></td>
                        <td><p>Descripción F</p></td>
                        <td><p>Nombre Largo F</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto C</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario F</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>March 5th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 5</p></td>
                        <td><p>CUSCO</p></td>
                        <td><p>CUSCO</p></td>
                        <td><p>MI BANCO</p></td>
                        <td><p>Plaza Central</p></td>
                        <td><p>Cliente G</p></td>
                        <td><p>Detalle G</p></td>
                        <td><p>Descripción G</p></td>
                        <td><p>Nombre Largo G</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto D</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario G</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>April 1st, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>

                    <tr>
                        <td><p>Desarrollo de nuevo sistema</p></td>
                        <td><p>LIMA</p></td>
                        <td><p>LIMA</p></td>
                        <td><p>FALABELLA</p></td>
                        <td><p>Calle Ficticia 123</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>ALGO LARGO Y ALEATORIO</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario1</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>January 10th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de integración</p></td>
                        <td><p>CUSCO</p></td>
                        <td><p>CUSCO</p></td>
                        <td><p>TRADEMARK</p></td>
                        <td><p>Avenida Principal</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>DESCRIPCIÓN LARGA ALEATORIA</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario2</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>February 15th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Modificación en base de datos</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>BANCO_NACIONAL</p></td>
                        <td><p>Calle Ejemplo</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>ROL DE SISTEMA</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario3</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>March 20th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Optimización del servidor</p></td>
                        <td><p>TRUJILLO</p></td>
                        <td><p>TRUJILLO</p></td>
                        <td><p>MINERA</p></td>
                        <td><p>Calle Secundaria</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>CONFIGURACIÓN DE SERVIDORES</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario4</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>April 5th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Desarrollo de nueva API</p></td>
                        <td><p>PIURA</p></td>
                        <td><p>PIURA</p></td>
                        <td><p>TELECOMUNICACIONES</p></td>
                        <td><p>Av. Innovación</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>API INTEGRADA</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario5</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>May 12th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de producción 1</p></td>
                        <td><p>LIMA</p></td>
                        <td><p>LIMA</p></td>
                        <td><p>SALDO_BANCO</p></td>
                        <td><p>Calle Nueva</p></td>
                        <td><p>Cliente A</p></td>
                        <td><p>Detalle A</p></td>
                        <td><p>Descripción A</p></td>
                        <td><p>Nombre Largo A</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Grupo X</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Admin</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>January 1st, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de producción 2</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>BANCO_FALABELLA</p></td>
                        <td><p>Avenida Sol</p></td>
                        <td><p>Cliente B</p></td>
                        <td><p>Detalle B</p></td>
                        <td><p>Descripción B</p></td>
                        <td><p>Nombre Largo B</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Banco Y</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>User B</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>January 5th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 1</p></td>
                        <td><p>TRUJILLO</p></td>
                        <td><p>TRUJILLO</p></td>
                        <td><p>SANTANDER</p></td>
                        <td><p>Calle Real</p></td>
                        <td><p>Cliente C</p></td>
                        <td><p>Detalle C</p></td>
                        <td><p>Descripción C</p></td>
                        <td><p>Nombre Largo C</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto Z</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario C</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>February 1st, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 2</p></td>
                        <td><p>CHICLAYO</p></td>
                        <td><p>CHICLAYO</p></td>
                        <td><p>BBVA</p></td>
                        <td><p>Avenida del Sol</p></td>
                        <td><p>Cliente D</p></td>
                        <td><p>Detalle D</p></td>
                        <td><p>Descripción D</p></td>
                        <td><p>Nombre Largo D</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto A</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario D</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>February 5th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 3</p></td>
                        <td><p>PIURA</p></td>
                        <td><p>PIURA</p></td>
                        <td><p>INTERBANK</p></td>
                        <td><p>Calle Principal</p></td>
                        <td><p>Cliente E</p></td>
                        <td><p>Detalle E</p></td>
                        <td><p>Descripción E</p></td>
                        <td><p>Nombre Largo E</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto B</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario E</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>March 1st, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 4</p></td>
                        <td><p>ICA</p></td>
                        <td><p>ICA</p></td>
                        <td><p>SCOTIABANK</p></td>
                        <td><p>Calle Azul</p></td>
                        <td><p>Cliente F</p></td>
                        <td><p>Detalle F</p></td>
                        <td><p>Descripción F</p></td>
                        <td><p>Nombre Largo F</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto C</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario F</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>March 5th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 5</p></td>
                        <td><p>CUSCO</p></td>
                        <td><p>CUSCO</p></td>
                        <td><p>MI BANCO</p></td>
                        <td><p>Plaza Central</p></td>
                        <td><p>Cliente G</p></td>
                        <td><p>Detalle G</p></td>
                        <td><p>Descripción G</p></td>
                        <td><p>Nombre Largo G</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto D</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario G</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>April 1st, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Desarrollo de nuevo sistema</p></td>
                        <td><p>LIMA</p></td>
                        <td><p>LIMA</p></td>
                        <td><p>FALABELLA</p></td>
                        <td><p>Calle Ficticia 123</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>ALGO LARGO Y ALEATORIO</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario1</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>January 10th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de integración</p></td>
                        <td><p>CUSCO</p></td>
                        <td><p>CUSCO</p></td>
                        <td><p>TRADEMARK</p></td>
                        <td><p>Avenida Principal</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>DESCRIPCIÓN LARGA ALEATORIA</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario2</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>February 15th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Modificación en base de datos</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>BANCO_NACIONAL</p></td>
                        <td><p>Calle Ejemplo</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>ROL DE SISTEMA</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario3</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>March 20th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Optimización del servidor</p></td>
                        <td><p>TRUJILLO</p></td>
                        <td><p>TRUJILLO</p></td>
                        <td><p>MINERA</p></td>
                        <td><p>Calle Secundaria</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>CONFIGURACIÓN DE SERVIDORES</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario4</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>April 5th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Desarrollo de nueva API</p></td>
                        <td><p>PIURA</p></td>
                        <td><p>PIURA</p></td>
                        <td><p>TELECOMUNICACIONES</p></td>
                        <td><p>Av. Innovación</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>Test</p></td>
                        <td><p>API INTEGRADA</p></td>

                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>BBVA</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario5</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>May 12th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>

                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de producción 1</p></td>
                        <td><p>LIMA</p></td>
                        <td><p>LIMA</p></td>
                        <td><p>SALDO_BANCO</p></td>
                        <td><p>Calle Nueva</p></td>
                        <td><p>Cliente A</p></td>
                        <td><p>Detalle A</p></td>
                        <td><p>Descripción A</p></td>
                        <td><p>Nombre Largo A</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Grupo X</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Admin</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>January 1st, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de producción 2</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>AREQUIPA</p></td>
                        <td><p>BANCO_FALABELLA</p></td>
                        <td><p>Avenida Sol</p></td>
                        <td><p>Cliente B</p></td>
                        <td><p>Detalle B</p></td>
                        <td><p>Descripción B</p></td>
                        <td><p>Nombre Largo B</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Banco Y</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>User B</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>January 5th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 1</p></td>
                        <td><p>TRUJILLO</p></td>
                        <td><p>TRUJILLO</p></td>
                        <td><p>SANTANDER</p></td>
                        <td><p>Calle Real</p></td>
                        <td><p>Cliente C</p></td>
                        <td><p>Detalle C</p></td>
                        <td><p>Descripción C</p></td>
                        <td><p>Nombre Largo C</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto Z</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario C</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>February 1st, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 2</p></td>
                        <td><p>CHICLAYO</p></td>
                        <td><p>CHICLAYO</p></td>
                        <td><p>BBVA</p></td>
                        <td><p>Avenida del Sol</p></td>
                        <td><p>Cliente D</p></td>
                        <td><p>Detalle D</p></td>
                        <td><p>Descripción D</p></td>
                        <td><p>Nombre Largo D</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto A</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario D</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>February 5th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 3</p></td>
                        <td><p>PIURA</p></td>
                        <td><p>PIURA</p></td>
                        <td><p>INTERBANK</p></td>
                        <td><p>Calle Principal</p></td>
                        <td><p>Cliente E</p></td>
                        <td><p>Detalle E</p></td>
                        <td><p>Descripción E</p></td>
                        <td><p>Nombre Largo E</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto B</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario E</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>March 1st, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 4</p></td>
                        <td><p>ICA</p></td>
                        <td><p>ICA</p></td>
                        <td><p>SCOTIABANK</p></td>
                        <td><p>Calle Azul</p></td>
                        <td><p>Cliente F</p></td>
                        <td><p>Detalle F</p></td>
                        <td><p>Descripción F</p></td>
                        <td><p>Nombre Largo F</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto C</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario F</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>March 5th, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status reservado"><p>Reservado</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                    <tr>
                        <td><p>Prueba de edición 5</p></td>
                        <td><p>CUSCO</p></td>
                        <td><p>CUSCO</p></td>
                        <td><p>MI BANCO</p></td>
                        <td><p>Plaza Central</p></td>
                        <td><p>Cliente G</p></td>
                        <td><p>Detalle G</p></td>
                        <td><p>Descripción G</p></td>
                        <td><p>Nombre Largo G</p></td>
                        <td>
                            <div class="content-tabla_proyecto"><span></span><p>Proyecto D</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_usuario"><span></span><p>Usuario G</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_fecha"><p>April 1st, 2025</p></div>
                        </td>
                        <td>
                            <div class="content-tabla_status progreso"><p>En Progreso</p></div>
                        </td>
                        <td><button type="button" class="Mostrar_Modal-edicion" onclick="MostrarContenidoModaledicion(this)"><i class="fa-solid fa-ellipsis-vertical"></i></button></td>
                    </tr>
                                        
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>