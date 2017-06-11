<?php
  $arrayPreguntas1= array('1'=>'¿Cual es mi postre favorito?','2'=>'Pais que deseo conocer','3'=>'Apellido Materno de mi madre');
  $arrayPreguntas2= array('1'=>'¿Cual es mi fruta favorita?','2'=>'lugar que deseo conocer','3'=>'Apellido Materno de mi Padre');

  // Definición Clase Usuario
  // Contendrá todas las funciones actuales
  class Usuario {
    private $nombre;
    private $apellido;
    private $telfijo;
    private $celular;
    private $email;
    private $pregunta_1;
    private $respuesta_1;
    private $pregunta_2;
    private $respuesta_2;
    private $pwd;
    private $id;
    private $img;

    function __construct($usuario) {
  		$this->nombre = !empty($usuario["nombre"])?$usuario["nombre"]: "";
  		$this->apellido = !empty($usuario["apellido"])?$usuario["apellido"]: "";
      $this->telfijo = !empty($usuario["telfijo"])?$usuario["telfijo"]: "";
  		$this->celular = !empty($usuario["celular"])?$usuario["celular"]: "";
      $this->email = !empty($usuario["email"])?$usuario["email"]: "";
      $this->pregunta_1 = !empty($usuario["pregunta_1"])?$usuario["pregunta_1"]: "";
      $this->respuesta_1 = !empty($usuario["respuesta_1"])?$usuario["respuesta_1"]: "";
      $this->pregunta_2 = !empty($usuario["pregunta_2"])?$usuario["pregunta_2"]: "";
      $this->respuesta_2 = !empty($usuario["respuesta_2"])?$usuario["respuesta_2"]: "";
  		$this->pwd = !empty($usuario["pwd"])?password_hash($usuario["pwd"], PASSWORD_DEFAULT): "";
  	}

    function setNombre($nombre) {
      $this->nombre = $nombre;
    }

    function getNombre() {
      return $this->nombre;
    }

    function setApellido($apellido) {
      $this->apellido = $apellido;
    }

    function getApellido() {
      return $this->apellido;
    }

    function setTelfijo($telfijo) {
      $this->telfijo = $telfijo;
    }

    function getTelfijo() {
      return $this->telfijo;
    }

    function setCelular($celular) {
      $this->celular = $celular;
    }

    function getCelular() {
      return $this->celular;
    }

    function setEmail($email) {
      $this->email = $email;
    }

    function getEmail() {
      return $this->email;
    }

    function setPregunta_1($pregunta_1) {
      $this->pregunta_1 = $pregunta_1;
    }

    function getPregunta_1() {
      return $this->pregunta_1;
    }

    function setRespuesta_1($respuesta_1) {
      $this->respuesta_1 = $respuesta_1;
    }

    function getRespuesta_1() {
      return $this->respuesta_1;
    }

    function setPregunta_2($pregunta_2) {
      $this->pregunta_2 = $pregunta_2;
    }

    function getPregunta_2() {
      return $this->pregunta_2;
    }

    function setRespuesta_2($respuesta_2) {
      $this->respuesta_2 = $respuesta_2;
    }

    function getRespuesta_2() {
      return $this->respuesta_2;
    }

    function setPwd($pwd) {
      $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
    }

    function getPwd() {
      return $this->pwd;
    }

    function setImg($img) {
      $this->img = $img;
    }

    function getImg() {
      return $this->img;
    }

    function validarRegistroUsuario ($cpwd, $modo="json", $db, $usuarioModificar=false){
      $errores = [];

  		if (trim($this->nombre) == "")	{
  			$errores[] = "Debe ingresar un nombre";
  		}
  		if (trim($this->apellido) == ""){
  			$errores[] = "Debe ingresar un apellido";
  		}
      if($usuarioModificar==false){
    		if (trim($this->pwd) == ""){
    			$errores[] = "Debe ingresar su password";
    		}
    		if (trim($cpwd) == ""){
    			$errores[] = "Debe reingresar su password";
    		}
    		if (!password_verify($cpwd, $this->pwd)){
    			$errores[] = "Error en la validación de password, deben ser iguales";
    		}
    		if ($this->email == ""){
    			$errores[] = "Debe ingresar su email";
    		}
    		if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
    			$errores[] = "El mail ingresado no es válido";
    		}
    		if ($this->existeElUsuario($modo, $db)) {
    			$errores[] = "El Usuario ya está registrado previamente";
    		}
      }
      if ($this->respuesta_1 == ""){
  			$errores[] = "Debe responder pregunta 1";
  		}
      if ($this->respuesta_2 == ""){
  			$errores[] = "Debe responder pregunta 2";
  		}
  		return $errores;
    }

    private function existeElUsuario($modo = "json", $db){
      $email = $this->email;
      if ($modo == "json") {
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
      } else { // modo = "db"
        $sentencia = "SELECT email FROM usuario WHERE usuario.email = '" . $email . "'";
        $stmt = $db->prepare($sentencia);
        $stmt -> execute();
        if ($stmt->rowCount() > 0) {
          return true;
        } else {
          return false;
        }
      }
  	}

    private function traerNuevoId () {
      if (!file_exists("ultimoUsuario.txt")) {
        $nuevoId = "1";
      } else {
        $nuevoId = trim(file_get_contents ("ultimoUsuario.txt"));
        $nuevoId++;
      }
      file_put_contents("ultimoUsuario.txt", $nuevoId . PHP_EOL);
      return $nuevoId;
    }

    function guardarUsuario($modo="json", $db) {
      if ($modo == "json") {
    		$this->id = $this->traerNuevoId();
        $usuarioJSON = json_encode(get_object_vars($this));
    		file_put_contents("usuarios.json", $usuarioJSON . PHP_EOL, FILE_APPEND);
      } else { // modo = "db"
        $sentencia = "INSERT INTO usuario (nombre, apellido, email, telfijo, celular, pregunta_1, respuesta_1, pregunta_2, respuesta_2, pwd, img) VALUES (:nombre, :apellido, :email, :telfijo, :celular, :pregunta_1, :respuesta_1, :pregunta_2, :respuesta_2, :pwd, :img)";
        $stmt = $db->prepare($sentencia);
        $stmt->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $this->apellido, PDO::PARAM_STR);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindParam(':telfijo', $this->telfijo, PDO::PARAM_STR);
        $stmt->bindParam(':celular', $this->celular, PDO::PARAM_STR);
        $stmt->bindParam(':pregunta_1', $this->pregunta_1, PDO::PARAM_STR);
        $stmt->bindParam(':respuesta_1', $this->respuesta_1, PDO::PARAM_STR);
        $stmt->bindParam(':pregunta_2', $this->pregunta_2, PDO::PARAM_STR);
        $stmt->bindParam(':respuesta_2', $this->respuesta_2, PDO::PARAM_STR);
        $stmt->bindParam(':pwd', $this->pwd, PDO::PARAM_STR);
        $stmt->bindParam(':img', $this->img, PDO::PARAM_STR);
        $stmt -> execute();
        if ($stmt->rowCount() > 0) {
          return true;
        } else {
          return false;
        }

      }
  	}

    function validarIngresoUsuario ($pwd, $modo="json", $db){
      $errores = [];
      $mailOk = false;
      if ($this->email == ""){
  			$errores[] = "Debe ingresar su email";
  		} else {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
    			$errores[] = "El mail ingresado no es válido";
    		} else {
          $mailOk = true;
        }
      }
      $pwdOk = false;
      if (trim($pwd) == ""){
  			$errores[] = "Debe ingresar su password";
  		} else {
        if (!$this->existeElUsuario($modo, $db)) {
    			$errores[] = "El Usuario no está registrado";
    		} else {
          $pwdOk = true;
        }
      }
      if ($mailOk && $pwdOk) {
        $pwd_guardada = $this->datosUsuario($modo, $db)["pwd"];
        if (!password_verify($pwd, $pwd_guardada)) {
          $errores[] = "La password es incorrecta";
        } else {
          $this->pwd = $pwd_guardada;
        }
      }
  		return $errores;
    }

    //Dado un Usuario, devuelve un array con sus atributos
    function datosUsuario($modo, $db){
      $email = $this->email;
      if ($modo == "json") {
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
      } else {// modo = "db"
        $sentencia = "SELECT * FROM usuario WHERE usuario.email = '" . $email . "'";
        $stmt = $db->prepare($sentencia);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
      }
      return "";
  	}

    function reescribirUsuario($modo="json", $db){
      $datosUsuario = get_object_vars($this);
      if ($modo == "json") {
        //cargo en un string el contenido del archivo de usuarios. Son lineas con json
        $usuarios = file_get_contents("usuarios.json");
        //cargo un array de strings, separadas por caracter de fin de linea php
        $usuariosArray = explode(PHP_EOL, $usuarios);
        foreach ($usuariosArray as $key => $usuario) {
          $usuarioArray = json_decode($usuario, true);
          if ($datosUsuario['email'] == $usuarioArray['email']){
            $usuariosArray[$key] = json_encode($datosUsuario);
          }else{
            $usuariosArray[$key] = $usuario;
          }
        }
        $usuarioJSON= implode(PHP_EOL, $usuariosArray);
        file_put_contents("usuarios.json", $usuarioJSON);
      } else {// modo = "db"
        $sentencia = "UPDATE usuario SET nombre=:nombre, apellido=:apellido, email=:email, telfijo=:telfijo, celular=:celular, pregunta_1=:pregunta_1, respuesta_1=:respuesta_1, pregunta_2=:pregunta_2, respuesta_2=:respuesta_2, pwd=:pwd, img=:img) WHERE usuario.email = '" . $this->email . "'";
        $stmt = $db->prepare($sentencia);
        $stmt->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $this->apellido, PDO::PARAM_STR);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindParam(':telfijo', $this->telfijo, PDO::PARAM_STR);
        $stmt->bindParam(':celular', $this->celular, PDO::PARAM_STR);
        $stmt->bindParam(':pregunta_1', $this->pregunta_1, PDO::PARAM_STR);
        $stmt->bindParam(':respuesta_1', $this->respuesta_1, PDO::PARAM_STR);
        $stmt->bindParam(':pregunta_2', $this->pregunta_2, PDO::PARAM_STR);
        $stmt->bindParam(':respuesta_2', $this->respuesta_2, PDO::PARAM_STR);
        $stmt->bindParam(':pwd', $this->pwd, PDO::PARAM_STR);
        $stmt->bindParam(':img', $this->img, PDO::PARAM_STR);
        $stmt->execute();
        echo "La sentencia sql es: " . $sentencia . "<br>";
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "<PRE>";
        print_r($resultado);
        echo "</PRE>";
        die();
      }
    }
  }
  // ************** FIN CLASE USUARIO

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
			"pwd" => $usuario["pwd"],
			"id" => $usuario["id"]
		];
		return $usuarioJS;
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

  function validarCambioPwd($pwd1, $pwd2){
    $errores = [];

    if (trim($pwd1) == ""){
      $errores[] = "Debe ingresar su password";
    }
    if (trim($pwd2) == ""){
      $errores[] = "Debe reingresar su password";
    }
    if ($pwd1 != $pwd2){
      $errores[] = "Error en la validación de password, deben ser iguales";
    }
    return $errores;
  }

  function guardarUsrSession ($email) {

    $datoUsrArr = datosUsuario($email);
    foreach ($datoUsrArr as $key => $value) {
      $_SESSION[$key] = $value;
    }
  }

  function esUnaImagen($ext) {
    $ext = strtolower($ext);
    if ($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'svg') {
      return TRUE;
    }
    return FALSE;
  }

  function tienePesoValido($size) {

    $pesoMaximo = 90000000;
    // 9 MB

    if ($size > $pesoMaximo) {
      return FALSE;
    }
    return TRUE;
  }

  function guardarImagen ($imagen) {
    //Proceso para subir imagen a la carpeta upload
    //$imagen es un array que recibe a $_FILES como valor
    //Se guarda en la carpeta "upload"
    //Devuelve un array con status y detalle informando de un error "status=Error" o que se guardó en forma correcta "status=Guardada". En el detalle se informa el mensaje de error o el nombre del archivo guardado incluyendo su ruta.
    $respuesta = [
      "status"=>"Error",
      "detalle"=>"No hay imagen"];
    if (!empty($imagen)) {
      $nombre=$imagen["archivo"]["name"];
      $archivo=$imagen["archivo"]["tmp_name"];
      $ext = pathinfo($nombre, PATHINFO_EXTENSION);
      if (!esUnaImagen($ext) || !tienePesoValido($imagen['archivo']['size'])) {
        $respuesta = [
          "status" => "Error",
          "detalle" => "La imagen es muy pesada o no tiene un formato valido"];
      } else {
        $nombre_hash = md5(microtime().$nombre);
        $destino = "upload/" . $nombre_hash ."." . $ext;
        $upload = move_uploaded_file($archivo, $destino);
        if ($upload) {
          $respuesta = [
            "status" => "Guardada",
            "detalle" => $destino];
        } else {
          $respuesta = [
            "status" => "Error",
            "detalle" => "La imagen no subió"];
        }
      }
    }
    return $respuesta;
  }
?>
