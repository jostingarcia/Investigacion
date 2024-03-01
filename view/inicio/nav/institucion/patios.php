
<?php include '../../../main/mainhead.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../../../../public/css/styles.css">
 
</head>
<body>
  <br>

<h2 style="color: white;"><strong>PATIOS DE RECREACIÓN Y DEPORTES</strong></h2>

<style>
   body {
      background-image: url("../../../../public/img/fondo patio1.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }

    h2 {
      text-align: center;
      font-family: Arial, sans-serif;
      font-weight: bold;
    }
  </style>
  <div class="container-fluid">
    <div class="row">
      <?php
        $imagenes = array(
          array("../../../../public/img/patio1.jpg", "Patio de Recreación"),
          array("../../../../public/img/patio3.jpg", "Patio de JUegos"),
          array("../../../../public/img/patio2.jpg", "Patio de Deportes")
        );

        foreach ($imagenes as $imagen) {
          echo '<div class="col-md-4 col-sm-6">';
          echo '<div class="image-box">';
          echo '<img src="' . $imagen[0] . '" alt="Imagen">';
          echo '<div class="image-description">' . $imagen[1] . '</div>';
          echo '</div>';
          echo '</div>';
        }
      ?>
    </div>
  </div>

<br>

<div class="benefits-container" style="text-align: left; color: white;">
  <h2 style="font-weight: bold; text-align: left;">Beneficios del Patio en el Colegio Adolfo Gustavo Bequer</h2>
  <br>

  <p style="text-align: justify;">El patio dentro del colegio Adolfo Gustavo Bequer ofrece una serie de beneficios importantes para los estudiantes:</p>
  <ul style="text-align: justify;">
    <li>Promueve la recreación y el esparcimiento, permitiendo a los estudiantes disfrutar de un tiempo libre activo y saludable.</li>
    <li>Fomenta la socialización y la interacción entre los estudiantes, facilitando la formación de amistades y el trabajo en equipo.</li>
    <li>Proporciona un espacio para la práctica de actividades deportivas, ayudando a desarrollar habilidades físicas, coordinación y disciplina.</li>
    <li>Contribuye a la salud y el bienestar general de los estudiantes, brindándoles la oportunidad de realizar ejercicio y liberar energía.</li>
    <li>Estimula la creatividad y la imaginación, ya que los patios suelen contar con juegos y espacios para actividades lúdicas.</li>
  </ul>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>


</html>