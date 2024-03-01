$(document).ready(function() {
    // Obtener el ID de la materia del parámetro de la URL
    var apoderadoId = obtenerParametroURL('id');
  
    // Realizar solicitud AJAX para obtener los datos de la materia
    $.ajax({
      type: 'POST',
      url: '../../controller/apoderadocontrolador.php',
      data: {
        op: 'obtener',
        apo_id: apoderadoId
      },
      success: function(response) {
        var datos = JSON.parse(response);
  
        // Asignar los datos de la materia al formulario
        $('#apo_id').val(datos.apo_id);
        $('#apo_nom').val(datos.apo_nom);
        $('#apo_ape').val(datos.apo_ape);
      }
    });
  
    // Capturar el evento de envío del formulario
    $('#frmapo').submit(function(e) {
      e.preventDefault(); // Evitar el envío normal del formulario
  
      // Obtener los datos del formulario
      var formData = $(this).serialize();
  
      // Realizar la solicitud AJAX al controlador para guardar los cambios
      $.ajax({
        type: 'POST',
        url: '../../controller/apoderadocontrolador.php',
        data: formData,
        success: function(response) {
          // Manejar la respuesta del controlador
          console.log(response); // Mostrar la respuesta en la consola para depuración
  
          // Mostrar mensaje de éxito
          $('#mensaje-exito').text('Los cambios se han guardado correctamente.');
          $('#mensaje-exito').show(); // Mostrar el elemento
  
          // Actualizar la URL con el nuevo ID si se ha creado una nueva materia
          if (apoderadoId === '') {
            var nuevoId = response; // Suponiendo que el controlador devuelve el nuevo ID
            var nuevaUrl = window.location.href.split('?')[0] + '?id=' + nuevoId;
            history.pushState(null, null, nuevaUrl);
          }
        },
        error: function(xhr, status, error) {
          // Manejar errores en caso de que ocurra algún problema en la solicitud AJAX
          console.error(xhr.responseText);
        }
      });
    });
  
    // Función para obtener el valor de un parámetro de la URL
    function obtenerParametroURL(nombre) {
      var url = window.location.search.substring(1);
      var parametros = url.split('&');
  
      for (var i = 0; i < parametros.length; i++) {
        var parametro = parametros[i].split('=');
        if (parametro[0] === nombre) {
          return parametro[1];
        }
      }
  
      return null;
    }

        // Función para redireccionar a otra página



  });
    function regresar() {
        window.location.href = '../apoderado/index.php';
    }

  