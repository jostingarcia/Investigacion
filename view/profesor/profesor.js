$(document).ready(function() {
    // Realizar la solicitud POST al controlador al cargar la página
    $.ajax({
      type: 'POST',
      url: '../../controller/profesorcontrolador.php',
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
            '<td>' + row[3] + '</td>' +
            '<td><a href="../View/profesor_materia.php?id=' + row[0] + '" class="btn btn-info">Materias</a></td>' +
            '<td><a href="#" class="btn btn-info editar-profesor" data-id="' + row[0] + '">Editar</a></td>' +
            '<td><a href="#" class="btn btn-info eliminar-profesor" data-id="' + row[0] + '">Eliminar</a></td>' +
            '</tr>';
          tbody += tr;
        }
  
        // Agregar el contenido al tbody de la tabla
        $('#tabla-profesores tbody').html(tbody);
      }
    });
  
    // Función para eliminar un profesor
    $(document).on('click', '.eliminar-profesor', function(e) {
      e.preventDefault();
      var profesorId = $(this).data('id');
      eliminarProfesor(profesorId);
    });
  
    
    function eliminarProfesor(profesorId) {
      $.ajax({
        type: 'POST',
        url: '../../controller/profesorcontrolador.php',
        data: {
          op: 'eliminar',
          prof_id: profesorId
        },
        success: function(response) {
          // Eliminación exitosa, recargar la página actual
          location.reload();
        }
      });
    }
    
    $(document).on('click', '.editar-profesor', function(e) {
        e.preventDefault();
        var profesorId = $(this).data('id');
        editarProfesor(profesorId);
      });
    
      function editarProfesor(profesorId) {
        // Realizar solicitud AJAX para obtener los datos del profesor
        window.location.href = '../formularios/frmprofesor.php?id=' + profesorId;
      }

  });
  