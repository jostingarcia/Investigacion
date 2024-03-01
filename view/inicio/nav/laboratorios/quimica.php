<?php include '../../../main/mainhead.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../../../../public/css/styles.css">
 
</head>
<body>
  <br>
<h2 style="color: white;"><strong>LABORATORIO DE QUÍMICA</strong></h2>

<style>
   body {
      background-image: url("../../../../public/img/fondo LABOQUIMICA1.jpg");
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
          array("../../../../public/img/quimica1.jpg", "Laboratio de Química"),
          array("../../../../public/img/quimica2.jpg", "Laboratio de Química"),
          array("../../../../public/img/quimica3.jpg", "Laboratio de Química"),
          array("../../../../public/img/quimica4.jpg", "Laboratio de Química"),
          array("../../../../public/img/quimica5.jpg", "Laboratio de Química"),
          array("../../../../public/img/quimica6.jpg", "Laboratio de Química")
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>