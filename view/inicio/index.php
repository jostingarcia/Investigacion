<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" / href="../../public/css/contacto.css">
    <link rel="stylesheet" / href="../../public/css/main.css">
    <link rel="stylesheet" / href="../../public/css/navbar.css">

</head>

<body>


<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <img src="../../public/img/ISOS/UCV.png" alt="" width="50" height="50">
            <a class="navbar-brand" href="../../index.php" style="color: white; padding-left: 10px;">Colegio Adolfo Becquer</a>
            <button class="navbar-toggler " style="color: white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="nav/institucion/Nosotros.php"
                            style="color: white;">Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-item" style="color: white" href="#"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Instalaciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="nav/institucion/Instalaciones.php">Nuestras Instalaciones</a></li>
                            <li><a class="dropdown-item" href="nav/institucion/patios.php">Patios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-item" style="color: white" href="#"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Laboratios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="nav/laboratorios/Computo.php">Computo</a></li>
                            <li><a class="dropdown-item" href="nav/laboratorios/quimica.php">Quimica</a></li>
                            <li><a class="dropdown-item" href="nav/laboratorios/Fisica.php">Fisica</a></li>
                            <li><a class="dropdown-item" href="nav/laboratorios/Biologia.php">Biologia</a></li>
                            
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

    <div style="width: 100%;">
        <img src="../../public/img/Frontis.png" style="width: 100%; height: auto" />
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3"
            style="background-color: rgba(78, 113, 179, 0.75); color:white">
            <div class="container marketing">
                <section class="jumbotron text-center">
                    <div class="container">
                        <h1 class="jumbotron-heading" style="color: white">- Simbolos Patrios -</h1>
                        <br />
                    </div>
                </section>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="../../public/img/ISOS/UCV.png" style="width: 140px; height 140px"
                            class="bd-placeholder-img" />
                        <h2 class="fw-normal">Uni. Cesar Vallejo</h2>
                        <p>ISO 9001</p>
                        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="../../public/img/ISOS/Escudo.png" style="width: 140px; height 140px"
                            class="bd-placeholder-img" />
                        <h2 class="fw-normal">Gustavo Bequer</h2>
                        <p>Sede SJL</p>
                        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="../../public/img/ISOS/Ugel.png" style="width: 140px; height 140px"
                            class="bd-placeholder-img" />
                        <h2 class="fw-normal">Peru</h2>
                        <p>Patria Amada</p>
                        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3"
            style="background-color: rgba(78, 113, 179, 0.75); color:white">
            <div class="container marketing">
                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">- Quienes Somos -</h2>
                        <p class="lead">
                            Somos un colegio de primaria y secundaria comprometido con la excelencia
                             educativa y el desarrollo integral de nuestros estudiantes. Fundado en 
                             [2011], contamos con una larga trayectoria en brindar una educación de 
                             calidad y formar generaciones de jóvenes preparados para enfrentar los
                              desafíos del mundo actual.
                        </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="../../public/img/mision.jpeg" /
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            style="width: auto; height:500px" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3"
            style="background-color: rgba(78, 113, 179, 0.75); color:white">
            <div class="container marketing">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">- Nuestra Visión -</h2>
                        <p class="lead">Ser un colegio Gustavo Adolfo Bécquer reconocido por cultivar 
                            la creatividad, el amor por el arte y la literatura en nuestros estudiantes. 
                            Brindamos una educación integral, promoviendo el pensamiento crítico y la sensibilidad artística. 
                            Valoramos la individualidad y formamos ciudadanos comprometidos con la cultura. 
                            Inspiramos a nuestros estudiantes a apreciar la belleza y a expresarse de manera auténtica..</p>
                    </div>
                    <div class="col-md-5">
                        <img src="../../public/img/vision.jpeg"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            style="width: auto; height:500px" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center text-lg-start bg-dark text-muted" style="color:white">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="color:white">
        </section>
        <div class="container">
            <div class="row" style="margin-bottom: 10px; margin-top: 10px;">
                <div class="col">
                    <div
                        style="display: flex; align-items: center; justify-content: center; background-color: rgba(78, 113, 179, 0.75);">
                        <h6 class="text-uppercase mb-4" style="margin-top: 20px; color: white;">OFICINA CHORRILLOS</h6>
                    </div>
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15601.223159204392!2d-77.023497!3d-12.1595725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x662590471f51dae1!2sJCB%20ESTRUCTURAS!5e0!3m2!1ses-419!2spe!4v1677080771584!5m2!1ses-419!2spe"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col">
                    <div
                        style="display: flex; align-items: center; justify-content: center; background-color: rgba(78, 113, 179, 0.75);">
                        <h6 class="text-uppercase mb-4" style="margin-top: 20px; color: white;">PLANTA JICAMARCA</h6>
                    </div>
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15615.559070541236!2d-76.946606!3d-11.9127592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105db0de6a66221%3A0x67df222627f20c1e!2sJCB%20ESTRUCTURAS!5e0!3m2!1ses-419!2spe!4v1677176242576!5m2!1ses-419!2spe"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4" style="color: white;">Gustavo Adolfo Becquer</h6>
                        <p style="color: white;">
                            Especializada en Enseñanzas desde los niveles basicos hasta  secundarios, con
                            líneas de acción que comprenden el diseño, creatividad , inovacion e inteligencia.
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="color: white;">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Instalaciones
                        </h6>
                        <p>
                            <a href="index.php" class="text-reset">Nuestra Institucion</a>
                        </p>
                        <p>
                            <a href="index.php" class="text-reset">Laboratorios</a>
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="color: white;">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Enseñanzas
                        </h6>
                        <p>
                            <a class="text-reset">Valor</a>
                        </p>
                        <p>
                            <a  class="text-reset">Respeto</a>
                        </p>
                        <p>
                            <a class="text-reset">Alegria y diversion</a>
                        </p>
                        <p>
                            <a class="text-reset">Creatividad</a>
                        </p>
                        <p>
                            <a  class="text-reset">Innovacion</a>
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="color: white;">
                        <p>
                            <a class="text-reset text-uppercase fw-bold mb-4">Clientes</a>
                        </p>
                        <p>
                            <a class="text-reset text-uppercase fw-bold mb-4">Proveedores</a>
                        </p>
                        <p>
                            <a  class="text-reset text-uppercase fw-bold mb-4">Contacto</a>
                        </p>
                        <p>
                            <a class="text-reset text-uppercase fw-bold mb-4">Libro de
                                Reclamaciones</a>
                        </p>
                        <p>
                            <a  class="text-reset text-uppercase fw-bold mb-4">Denuncias</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold">Gustavo Adolfo Bequer</a>
        </div>
    </footer>
</body>

</html>