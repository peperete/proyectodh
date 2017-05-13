<?php
$arrayPreguntas1= array('1'=>'¿Cual es mi postre favorito?','2'=>'Pais que deseo conocer','3'=>'Apellido Materno de mi madre');
$arrayPreguntas2= array('1'=>'¿Cual es mi fruta favorita?','2'=>'lugar que deseo conocer','3'=>'Apellido Materno de mi Padre');

  function validarRegistroUsuario ($usuario, $usuarioModificar=false){
    $errores = [];

		if (trim($usuario["nombre"]) == "")	{
			$errores[] = "Debe ingresar un nombre";
		}
		if (trim($usuario["apellido"]) == ""){
			$errores[] = "Debe ingresar un apellido";
		}
    if($usuarioModificar==false){
  		if (trim($usuario["pwd"]) == ""){
  			$errores[] = "Debe ingresar su password";
  		}
  		if (trim($usuario["cpwd"]) == ""){
  			$errores[] = "Debe reingresar su password";
  		}
  		if ($usuario["pwd"] != $usuario["cpwd"]){
  			$errores[] = "Error en la validación de password, deben ser iguales";
  		}
  		if ($usuario["email"] == ""){
  			$errores[] = "Debe ingresar su email";
  		}
  		if (!filter_var($usuario["email"], FILTER_VALIDATE_EMAIL)){
  			$errores[] = "El mail ingresado no es válido";
  		}
  		if (existeElUsuario($usuario["email"])) {
  			$errores[] = "El Usuario ya está registrado previamente";
  		}
    }
    if ($usuario["respuesta_1"] == ""){
			$errores[] = "Debe responder pregunta 1";
		}
    if ($usuario["respuesta_2"] == ""){
			$errores[] = "Debe responder pregunta 2";
		}
		return $errores;
  }

  function existeElUsuario($email){
    if (file_exists("usuarios.json")) {
      //cargo en un string el contenido del archivo de usuarios. Son lineas con json
      $usuarios = file_get_contents("usuarios.json");
      //cargo un array de strings, separadas por caracter de fin de linea php
  		$usuariosArray = explode(PHP_EOL, $usuarios);
      //elimino el último componente del array, que corresponde con el caracter de fin de archivo
  		//array_pop($usuariosArray);
  		foreach ($usuariosArray as $key => $usuario) {
  			$usuarioArray = json_decode($usuario, true);
  			if ($email == $usuarioArray["email"]){
  				return true;
  			}
  		}
    }
    return false;
	}

  function guardarUsuario($usuario) {
		$usuarioJSON = json_encode($usuario);
		file_put_contents("usuarios.json", $usuarioJSON . PHP_EOL, FILE_APPEND);
	}

  function crearUsuario($usuario) {
		$usuarioJS = [
			"nombre" => $usuario["nombre"],
			"apellido" => $usuario["apellido"],
      "telfijo" => $usuario["telfijo"],
			"celular" => $usuario["celular"],
      "email" => $usuario["email"],
      "pregunta_1"=> $usuario["pregunta_1"],
      "respuesta_1" => $usuario["respuesta_1"],
      "pregunta_2"=> $usuario["pregunta_2"],
      "respuesta_2" => $usuario["respuesta_2"],
			"pwd" => password_hash($usuario["pwd"], PASSWORD_DEFAULT),
			"id" => traerNuevoId()
		];
		return $usuarioJS;
	}

  function modificarUsuario($usuario) {
		$usuarioJS = [
			"nombre" => $usuario["nombre"],
			"apellido" => $usuario["apellido"],
      "telfijo" => $usuario["telfijo"],
			"celular" => $usuario["celular"],
      "email" => $usuario["email"],
      "pregunta_1"=> $usuario["pregunta_1"],
      "respuesta_1" => $usuario["respuesta_1"],
      "pregunta_2"=> $usuario["pregunta_2"],
      "respuesta_2" => $usuario["respuesta_2"],
			"pwd" => $usuario["pwdUsuario"],
			"id" => $usuario["idUsuario"],
		];
		return $usuarioJS;
	}

  function reescribirUsuario($datosUsuario){

    //cargo en un string el contenido del archivo de usuarios. Son lineas con json
    $usuarios = file_get_contents("usuarios.json");
    //cargo un array de strings, separadas por caracter de fin de linea php
    $usuariosArray = explode(PHP_EOL, $usuarios);
    //elimino el último componente del array, que corresponde con el caracter de fin de archivo
    //array_pop($usuariosArray);
    foreach ($usuariosArray as $key => $usuario) {
      $usuarioArray = json_decode($usuario, true);
      if ($datosUsuario['id'] == $usuarioArray["id"]){
        $usuariosArray[$key] = json_encode($datosUsuario);
      }else{
        $usuariosArray[$key] = $usuario;
      }
    }
    $usuarioJSON= implode(PHP_EOL, $usuariosArray);
    file_put_contents("usuarios.json", $usuarioJSON.PHP_EOL);

  }

  function traerNuevoId () {
    if (!file_exists("ultimoUsuario.txt")) {
      $nuevoId = "1";
    } else {
      $nuevoId = trim(file_get_contents ("ultimoUsuario.txt"));
      $nuevoId++;
    }
    file_put_contents("ultimoUsuario.txt", $nuevoId . PHP_EOL);
    return $nuevoId;
  }

  function validarIngresoUsuario ($usuario){
    $errores = [];
    $mailOk = false;
    if ($usuario["email"] == ""){
			$errores[] = "Debe ingresar su email";
		} else {
      if (!filter_var($usuario["email"], FILTER_VALIDATE_EMAIL)){
  			$errores[] = "El mail ingresado no es válido";
  		} else {
        $mailOk = true;
      }
    }
    $pwdOk = false;
    if (trim($usuario["pwd"]) == ""){
			$errores[] = "Debe ingresar su password";
		} else {
      if (!existeElUsuario($usuario["email"])) {
  			$errores[] = "El Usuario no está registrado";
  		} else {
        $pwdOk = true;
      }
    }
    if ($mailOk && $pwdOk) {
      if (!password_verify($usuario["pwd"], datosUsuario($usuario["email"])["pwd"])) {
        $errores[] = "La password es incorrecta";
      }
    }

		return $errores;
  }

  //Dado el registro con los datos de un usuario guardados en el archivo json
  function datosUsuario($email){
    if (file_exists("usuarios.json")) {
      //cargo en un string el contenido del archivo de usuarios. Son lineas con json
      $usuarios = file_get_contents("usuarios.json");
      //cargo un array de strings, separadas por caracter de fin de linea php
  		$usuariosArray = explode(PHP_EOL, $usuarios);
      //elimino el último componente del array, que corresponde con el caracter de fin de archivo
  		//array_pop($usuariosArray);
  		foreach ($usuariosArray as $key => $usuario) {
  			$usuarioArray = json_decode($usuario, true);
  			if ($email == $usuarioArray["email"]){
  				return $usuarioArray;
  			}
  		}
    }
    return "";
	}
  function validarEmail ($usuario){
    $errores = [];
    $mailOk = false;
    if ($usuario["email"] == ""){
			$errores[] = "Debe ingresar su email";
		} else {
      if (!filter_var($usuario["email"], FILTER_VALIDATE_EMAIL)){
  			$errores[] = "El mail ingresado no es válido";
  		} else {
        $mailOk = true;
      }
    }
		return $errores;
  }

?>
