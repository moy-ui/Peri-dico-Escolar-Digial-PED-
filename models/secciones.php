<?php

class Secciones
{

  private $db;

  function __construct()
  {
    $this->db = database::connect();
  }

  public function getAll()
  {
    $sql = "SELECT id, nombre FROM secciones ";
    $secciones = $this->db->query($sql);
    return $secciones;
  }

  public function getDeportes()
  {
    $sql = "SELECT * FROM publicaciones WHERE seccion_id = 1;";
    $deportes = $this->db->query($sql);
    return $deportes;
  }

  public function getComunidad()
  {
    $sql = "SELECT * FROM publicaciones WHERE seccion_id = 2;";
    $comunidad = $this->db->query($sql);
    return $comunidad;
  }
  public function getCulturales()
  {
    $sql = "SELECT * FROM publicaciones WHERE seccion_id = 3;";
    $culturales = $this->db->query($sql);
    return $culturales;
  }

  public function getAvisos()
  {
    $sql = "SELECT *, u.imagen AS 'userfoto' FROM publicaciones p INNER JOIN usuarios u ON u.id = p.usuario_id WHERE p.seccion_id = 4;";
    $avisos = $this->db->query($sql);
    return $avisos;
  }
}
