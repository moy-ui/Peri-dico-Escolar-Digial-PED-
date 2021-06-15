<?php



class Actividad
{
  private $id;
  private $seccion_id;
  private $nombre;
  private $descripcion;
  private $imagen;

  private $db;

  public function __construct()
  {
    $this->db = database::connect();
  }


  public function getId()
  {
    return $this->id;
  }
  public function getSeccionId()
  {
    return $this->seccion_id;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getDescripcion()
  {
    return $this->descripcion;
  }
  public function getImagen()
  {
    return $this->imagen;
  }

  public function setId($id)
  {
    $this->id = $id;
  }
  public function setSeccionID($seccionId)
  {
    $this->seccion_id = $seccionId;
  }
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
  public function setDescripcion($descripcion)
  {
    $this->descripcion = $descripcion;
  }
  public function setImagen($imagen)
  {
    $this->imagen = $imagen;
  }


  public function getAll()
  {
    $sql = "SELECT * FROM actividad ";
    $actividades = $this->db->query($sql);
    return $actividades;
  }

  public function getBySeccion()
  {
    $sql = "SELECT * FROM actividad WHERE seccion_id = {$this->getId()}";
    $actividades = $this->db->query($sql);
    return $actividades;
  }
}
