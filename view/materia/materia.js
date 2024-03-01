$(document).ready(function() {
    // Realizar la solicitud POST al controlador al cargar la página
    $.ajax({
        type: 'POST',
        url: '../../controller/materiacontrolador.php',
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
                                   
                    '<td><a href="#" class="btn btn-info editar-materia" data-id="' + row[0] + '">Editar</a></td>' +
                    '<td><a href="#" class="btn btn-info eliminar-materia" data-id="' + row[0] + '">Eliminar</a></td>' +
                    '</tr>';
                tbody += tr;
            }
 
        // Agregar el contenido al tbody de la tabla
        $('#tabla-profesores tbody').html(tbody);
      }
    });
  
    // Función para eliminar una materia
    $(document).on('click', '.eliminar-materia', function(e) {
      e.preventDefault();
      var materiaID = $(this).data('id');
      eliminarProfesor(materiaID);
    });
  
    function eliminarProfesor(materiaID) {
      $.ajax({
        type: 'POST',
        url: '../../controller/materiacontrolador.php',
        data: {
          op: 'eliminar',
          mat_id: materiaID
        },
        success: function(response) {
          // Eliminación exitosa, recargar la página actual
          location.reload();
        }
      });
    }

    
    
    $(document).on('click', '.editar-materia', function(e) {
        e.preventDefault();
        var materiaId = $(this).data('id');
        editarMateria(materiaId);
      });
    
      function editarMateria(materiaId) {
        window.location.href = '../formularios/frmmateria.php?id=' + materiaId;
      }

  });
  