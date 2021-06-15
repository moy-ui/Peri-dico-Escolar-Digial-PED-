<?php
require_once 'models/secciones.php';
require_once 'models/Actividad.php';

class SeccionController
{

  public function deportes()
  {
    $id = $_GET['id'];
    $actividades = new Actividad();
    $actividades->setId($id);
    $actividad = $actividades->getBySeccion();
    require_once 'views/secciones/deportes.php';
  }

  public function culturales()
  {
    $id = $_GET['id'];
    $actividades = new Actividad();
    $actividades->setId($id);
    $actividad = $actividades->getBySeccion();
    require_once 'views/secciones/culturales.php';
  }

  public function comunidad()
  {
    $id = $_GET['id'];
    $actividades = new Actividad();
    $actividades->setId($id);
    $actividad = $actividades->getBySeccion();
    require_once 'views/secciones/comunidad.php';
  }
}
