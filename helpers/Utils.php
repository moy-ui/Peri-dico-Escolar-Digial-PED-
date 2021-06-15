<?php

class Utils
{

  public static function deleteSeccion($name)
  {
    if (isset($_SESSION[$name])) {
      $_SESSION[$name] = null;
      unset($_SESSION[$name]);
    }
    return $name;
  }
  public static function isUsuarioRegistrado()
  {
    if (!isset($_SESSION['identity'])) {
      header("location:" . BASE_URL);
    } else {
      return true;
    }
  }
  public static function showSecciones()
  {
    require_once 'models/secciones.php';
    $seccione = new Secciones();
    $secciones = $seccione->getAll();
    return $secciones;
  }

  public static function showActividades()
  {
    require_once 'models/Actividad.php';
    $actividad = new Actividad();
    $actividad = $actividad->getAll();
    return $actividad;
  }
}
