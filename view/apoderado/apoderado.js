$(document).ready(function() {
    // Realizar la solicitud POST al controlador al cargar la página
    $.ajax({
        type: 'POST',
        url: '../../controller/apoderadocontrolador.php',
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
                    '<td>' + row[2] + '</td>' + 
                                    
                    '<td><a href="#" class="btn btn-info editar-apoderado" data-id="' + row[0] + '">Editar</a></td>' +
                    '<td><a href="#" class="btn btn-info eliminar-apoderado" data-id="' + row[0] + '">Eliminar</a></td>' +
                    '</tr>';
                tbody += tr;
            }
 
        // Agregar el contenido al tbody de la tabla
        $('#tabla-profesores tbody').html(tbody);
      }
    });
  
    // Función para eliminar un apoderado
    $(document).on('click', '.eliminar-apoderado', function(e) {
      e.preventDefault();
      var apoderadoId = $(this).data('id');
      eliminarProfesor(apoderadoId);
    });
  
    function eliminarProfesor(apoderadoId) {
      $.ajax({
        type: 'POST',
        url: '../../controller/apoderadocontrolador.php',
        data: {
          op: 'eliminar',
          apo_id: apoderadoId
        },
        success: function(response) {
          // Eliminación exitosa, recargar la página actual
          location.reload();
        }
      });
    }

    $(document).on('click', '.editar-apoderado', function(e) {
      e.preventDefault();
      var apoderadoId = $(this).data('id');
      editarApoderado(apoderadoId);
    });
  
    function editarApoderado(apoderadoId) {
       window.location.href = '../formularios/frmapoderado.php?id=' + apoderadoId;
            
    }




  });
  