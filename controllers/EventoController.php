<?php


class EventoController
{


  public function index()
  {
    require_once 'views/eventos/eventos.php';
  }
  public function sendMail()
  {
    if (isset($_POST)) {
      $nombre = $_POST['nombre'];
      $carrera = $_POST['carrera'];
      $gradoygrupo = $_POST['gradoygrupo'];
      $telefono = $_POST['telefono'];
      $email = $_POST['email'];
      $evento  = $_POST['evento'];

      $titulo    = 'Registro al evento ' . $evento;
      $descripcion   = 'Hola ' . $nombre . ' de ' . $carrera . ' ' . $gradoygrupo . ' queremos avisarle que ya ha quedado inscrito en el evento.\n'
        . ' en unos momentos le llegara un correo con su identificación para ingresar al evento';
      $envio = mail($email, $titulo, $descripcion);
      if ($envio) {
        header("location: " . BASE_URL);
      }
      //Agregar una seccion para decir si sí o no se envio el correo
    }
  }
}
