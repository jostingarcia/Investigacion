<?php include '../../../main/mainhead.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../../../../public/css/styles.css">
 
</head>
<body>
  <br>
<h2 style="color: white;"><strong>LABORATORIO DE FISICA</h2>
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
          array("../../../../public/img/fisica1.jpg", "Laboratorio de fisica 1"),
          array("../../../../public/img/fisica2.jpeg", "Laboratorio de fisica 2"), 
          array("../../../../public/img/fisica3.jpeg", "Laboratorio de fisica 3"), 
          array("../../../../public/img/fisica4.jpeg", "Laboratorio de fisica 4"), 
          array("../../../../public/img/fisica5.jpeg", "Laboratorio de fisica 5"), 
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