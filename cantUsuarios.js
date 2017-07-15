
  $(document).ready(function(){
    // Se invoca por primera vez la función que trae el la cantidad de usuarios actuales
    ultimo();

    // Luego se prende el ciclo cada 30 segundos para actualizar la cantidad de usuarios actuales
    var ciclo = setInterval(ultimo, 10000);
    function ultimo() {
      $.get("ultimoUsuario.php", function(data, status){
              // alert("Data: " + data + "\nStatus: " + status);
              var respuesta = JSON.parse(data);
              $("#cantUsuarios").text(respuesta.cantidad);
          });
    };
  });
