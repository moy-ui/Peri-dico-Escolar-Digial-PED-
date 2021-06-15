<?php
require_once 'models/secciones.php';
class AvisoController
{
  public function index()
  {
    $secciones = new Secciones();
    $avisos = $secciones->getAvisos();
    require_once 'views/aviso/aviso.php';
  }
}
