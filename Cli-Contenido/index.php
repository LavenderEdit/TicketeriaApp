<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketeria App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div id="wrapper">
        <!-- Menú lateral GPL -->
        <nav id="sidebar">
            <ul class="menu">
                <li><a href="#" class="menu-item" data-page="dashboard"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li><a href="#" class="menu-item" data-page="tickets"><i class="fas fa-ticket-alt"></i><span>Mis Tickets</span></a></li>
                <li><a href="#" class="menu-item" data-page="configuracion"><i class="fas fa-cogs"></i><span>Configuración</span></a></li>
            </ul>
        </nav>

<!-- Contenido principal GPL-->
<div id="page-content">
    <!-- Header -->
    <header class="header">
        <button id="menu-toggle"><i class="fas fa-bars"></i></button>
        <div class="profile-icon">A</div>
    </header>

    <!-- Aquí se cargará el contenido GPL -->
    <div class="content" id="contenido">
        <!-- Contenido inicial -->
        <?php include 'pages/dashboard.php'; ?>
    </div>
</div>

    <script src="js/script.js"></script>
    <script src="js/navigation.js"></script>
</body>
</html>