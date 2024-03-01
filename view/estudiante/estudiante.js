$(document).ready(function() {
    // Realizar la solicitud POST al controlador al cargar la página
    $.ajax({
        type: 'POST',
        url: '../../controller/estudiantecontrolador.php',
        data: {
            op: 'listar' // Establecer el valor correspondiente para 'op'
        },
        success: function(response) {
            // Manejar la respuesta del controlador
            var datos = JSON.parse(response).aaData; // Obtener los datos específicos
            var tbody = '';

            // Construir el contenido de la tabla
            for (var i = 0; i < datos.length; i++) {
                var row = datos[i];
                var tr = '<tr>' +
                    '<td>' + row[1] + '</td>' + // Acceder a los elementos por su índice
                    '<td>' + row[3] + '</td>' + 
                    '<td>' + row[2] + '</td>' +  
                                     
                    '<td><a href="#" class="btn btn-info nota-estudiante" data-id="' + row[0] + '">Notas</a></td>' +
                    '<td><a href="#" class="btn btn-info editar-estudiante" data-id="' + row[0] + '">Editar</a></td>' +
                    '<td><a href="#" class="btn btn-info eliminar-estudiante" data-id="' + row[0] + '">Eliminar</a></td>' +
                    '</tr>';
                tbody += tr;
            }
 
        // Agregar el contenido al tbody de la tabla
        $('#tabla-profesores tbody').html(tbody);
      }
    });


    

        // Función para eliminar una Nota
        $(document).on('click', '.nota-estudiante', function(e) {
          e.preventDefault();
          var estudianteID = $(this).data('id');
          notasEstudiante(estudianteID);
        });
      
        function notasEstudiante(estudianteID) {
          window.location.href = '../formularios/notasestudiante.php?id=' + estudianteID;


        }
  
    // Función para eliminar una materia
    $(document).on('click', '.eliminar-estudiante', function(e) {
      e.preventDefault();
      var estudianteID = $(this).data('id');
      eliminarProfesor(estudianteID);
    });
  
    function eliminarProfesor(estudianteID) {
      $.ajax({
        type: 'POST',
        url: '../../controller/estudiantecontrolador.php',
        data: {
          op: 'eliminar',
          estu_id: estudianteID
        },
        success: function(response) {
          // Eliminación exitosa, recargar la página actual
          location.reload();
        }
      });
    }

    $(document).on('click', '.editar-estudiante', function(e) {
      e.preventDefault();
      var estudianteId = $(this).data('id');
      editarEstudiante(estudianteId);
    });
  
    function editarEstudiante(estudianteId) {
      window.location.href = '../formularios/frmestudiante.php?id=' + estudianteId;

    }
  });
  