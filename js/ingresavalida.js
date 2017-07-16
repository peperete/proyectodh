window.onload = function(){
  document.getElementById('Err').style.display='none';

    document.getElementById('formulario').addEventListener('submit', function(event){
      var errores = [];

      if(document.getElementById('email').value==''){
        errores.push("El Email es requerido");
      }
      if(document.getElementById('pwd').value==''){
        errores.push("Debe ingresar la contraseña");
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
