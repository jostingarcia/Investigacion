<!-- header.php -->
<!DOCTYPE html>
<html>
<head>
<title></title>
    <asp:ContentPlaceHolder ID="head" runat="server">
    </asp:ContentPlaceHolder>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <!-- IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.css"
        integrity="sha512-+ouAqATs1y4kpPMCHfKHVJwf308zo+tC9dlEYK9rKe7kiP35NiP+Oi35rCFnc16zdvk9aBkDUtEO3tIPl0xN5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- LIBRERIAS Y FUENTES GOOGLE -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- CSS SISTEMA -->
    <link rel="stylesheet" / href="../../../../public/css/contacto.css">
    <link rel="stylesheet" / href="../../../../public/css/main.css">
    <link rel="stylesheet" / href="../../../../public/css/navbar.css">


</head>
<body>

   <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <img src="../../../../public/img/ISOS/UCV.png" alt="" width="50" height="50">
            <a class="navbar-brand" href="../../index.php" style="color: white; padding-left: 10px;">Colegio Adolfo Becquer</a>
            <button class="navbar-toggler " style="color: white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../../inicio/nav/institucion/Nosotros.php"
                            style="color: white;">Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-item" style="color: white" href="#"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Instalaciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="../../../inicio/nav/institucion/Instalaciones.php">Nuestras Instalaciones</a></li>
                            <li><a class="dropdown-item" href="../../../inicio/nav/institucion/patios.php">Patios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-item" style="color: white" href="#"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Laboratios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="../../../inicio/nav/laboratorios/Computo.php">Computo</a></li>
                            <li><a class="dropdown-item" href="../../../inicio/nav/laboratorios/quimica.php">Quimica</a></li>
                            <li><a class="dropdown-item" href="../../../inicio/nav/laboratorios/Fisica.php">Fisica</a></li>
                            <li><a class="dropdown-item" href="../../../inicio/nav/laboratorios/Biologia.php">Biologia</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-item" style="color: white" href="#"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Consultas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="nav/laboratorios/LoginAdmin.php">Directorio</a></li>
                            <li><a class="dropdown-item" href="nav/laboratorios/LoginProfesor.php">Docente </a></li>
                            <li><a class="dropdown-item" href="nav/laboratorios/LoginEstudiante.php">Padres y Alumnos</a></li>
                        </ul>
                    </li>
                     
                    
                </ul>
            </div>
        </div>
    </nav>

    
</body>
</html>