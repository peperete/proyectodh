window.onload = function(){
  document.getElementById('Err').style.display='none';

    document.getElementById('formulario').addEventListener('submit', function(event){
      var errores = [];

      if(document.getElementById('file-input').value==''){
        errores.push("La foto es requerida");
      }
      if(document.getElementById('nombre').value==''){
        errores.push("El nombre es requerido");
      }
      if(document.getElementById('apellido').value==''){
        errores.push("El apellido es requerido");
      }
      if(document.getElementById('telfijo').value==''){
        errores.push("El Telefono es requerido");
      }
      if(document.getElementById('celular').value==''){
        errores.push("El Celular es requerido");
      }
      if(document.getElementById('email').value==''){
        errores.push("El Email es requerido");
      }

      if(document.getElementById('pregunta_1').value==''){
        errores.push("Debe seleccionar la pregunta 1");
      }
      if(document.getElementById('respuesta_1').value==''){
        errores.push("La respuesta 1 es requerida");
      }

      if(document.getElementById('pregunta_2').value==''){
        errores.push("Debe seleccionar la pregunta 2");
      }
      if(document.getElementById('respuesta_2_2').value==''){
        errores.push("La respuesta 2 es requerida");
      }
      if(document.getElementById('pwd').value==''){
        errores.push("Debe ingresar una contraseña");
      }
      if(document.getElementById('cpwd').value==''){
        errores.push("Debe confirmar la contraseña");
      }
      if(document.getElementById('pwd').value != document.getElementById('cpwd').value){
        errores.push("las contraseñas son diferentes");
      }


      if(errores.length > 0){
        document.getElementById('Err').innerHTML='';
        document.getElementById('Err').style.display='block';
        errores.forEach(  function(element, index) {
          if(index > 0){
            document.getElementById('Err').appendChild(document.createElement("BR"));
          }
          document.getElementById('Err').appendChild(document.createTextNode(element));
        });
        event.preventDefault();
        return false;
      }else{
        document.getElementById('Err').innerHTML='';
        document.getElementById('Err').style.display='none';
        document.getElementById('formulario').submit();
      }

    });


}
