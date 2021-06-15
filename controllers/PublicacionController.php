<?php
require_once 'models/publicacion.php';

class PublicacionController
{

  public function index()
  {
    $datos = new Publicacion();

    $dato = $datos->getDatosPublicacion();
    require_once 'views/publicaciones/publicaciones.php';
  }
  public function publicar()
  {
    Utils::isUsuarioRegistrado();
    $actividad = Utils::showActividades();
    require_once 'views/publicaciones/publicar.php';
  }

  public function addPublicacion()
  {
    if (isset($_POST) && isset($_GET['id'])) {

      $id = $_GET['id'];
      $descripcion =  $_POST['descripcion'];
      $actividad = $_POST['actividad'];

      // Creamos nuestro objeto publicacin 
      $publicacion = new Publicacion();
      $publicacion->setUsuarioId($id);
      $publicacion->setDescripcion($descripcion);
      $publicacion->setActividadId($actividad);


      if (isset($_FILES['imagen'])) {
        $file = $_FILES['imagen'];
        $filename = $file['name'];
        $type = $file['type'];

        if ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
          //Existe directorio

          if (!is_dir('uploads/fotoPublicacion')) {
            mkdir('uploads/fotoPublicacion', 0777, true);
          }

          move_uploaded_file($file['tmp_name'], 'uploads/fotoPublicacion/' . $filename);
          $publicacion->setImagen($filename);
        }
      } else {
        $publicacion->setImagen('null');
      }

      $save = $publicacion->addPublicacion();
      if ($save) {
        $_SESSION['publicacion'] = "complete";
      } else {
        $_SESSION['publicacion'] = 'failed';
      }
    } else {
      $_SESSION['publicacion'] = 'failed';
    }

    header("location:" . BASE_URL . "index.php");
  }
}
