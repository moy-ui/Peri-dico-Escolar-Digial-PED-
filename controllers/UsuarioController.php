<?php

require_once 'models/Usuario.php';

class UsuarioController
{

  public function registroEvento()
  {
    require_once 'views/usuario/registroEvento.php';
  }

  public function registro()
  {
    require_once 'views/usuario/registro.php';
  }
  public function session()
  {
    require_once 'views/usuario/login.php';
  }

  public function save()
  {
    if (isset($_POST) && $_POST['password'] != null && $_POST['email'] != null) {

      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      // Settear los datos
      $usuario = new Usuario();
      $usuario->setNombre($nombre);
      $usuario->setApellidos($apellidos);
      $usuario->setEmail($email);
      $usuario->setPassword($password);

      if (isset($_FILES['imagen'])) {
        $file = $_FILES['imagen'];
        $filename = $file['name'];
        $type = $file['type'];

        if ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
          //Existe directorio

          if (!is_dir('uploads/fotoPerfil')) {
            mkdir('uploads/fotoPerfil', 0777, true);
          }

          move_uploaded_file($file['tmp_name'], 'uploads/fotoPerfil/' . $filename);
          $usuario->setImagen($filename);
        }
      }

      $save = $usuario->save();

      if ($save) {
        $_SESSION['usuario'] = 'complete';
      } else {
        $_SESSION['usuario'] = 'failed';
      }
    } else {
      $_SESSION['usuario'] = 'failed';
    }

    header("location:" . BASE_URL);
  }

  public function login()
  {
    if (isset($_POST)) {
      //Identificar al usuario+
      //consulta a la base de datos
      $usuario = new Usuario();
      $usuario->setEmail($_POST['email']);
      $usuario->setPassword($_POST['password']);

      $identity = $usuario->login();
      //session para usuarios normales
      if ($identity && is_object($identity)) {
        $_SESSION['identity'] = $identity;


        if ($identity->rol == 'admin') {
          $_SESSION['admin'] = true;
        }
      } else {
        $_SESSION['error_login'] = 'identificacion fallida';
      }
    }
    header("location:" . BASE_URL);
  }
  public function logout()
  {
    if (isset($_SESSION['identity'])) {
      unset($_SESSION['identity']);
    }
    if (isset($_SESSION['admin'])) {
      unset($_SESSION['admin']);
    }

    header("location:" . BASE_URL);
  }
}
