<?php

class Publicacion
{

  private $id;
  private $usuario_id;
  private $Actividad_id;
  private $descripcion;
  private $imagen;
  private $fecha;

  private $db;

  // Setters y Getters
  public function getId()
  {
    return $this->id;
  }
  public function getUsuarioID()
  {
    return $this->usuario_id;
  }
  public function getActividadId()
  {
    return $this->Actividad_id;
  }
  public function getDescripcion()
  {
    return $this->descripcion;
  }
  public function getImagen()
  {
    return $this->imagen;
  }
  public function getFecha()
  {
    return $this->fecha;
  }


  public function setId($id)
  {
    $this->id = $id;
  }
  public function setUsuarioId($usuario_id)
  {
    $this->usuario_id = $usuario_id;
  }
  public function setActividadId($ActividadId)
  {
    $this->Actividad_id = $ActividadId;
  }
  public function setDescripcion($descripcion)
  {
    $this->descripcion = $descripcion;
  }
  public function setImagen($imagen)
  {
    $this->imagen = $imagen;
  }
  public function setFecha($fecha)
  {
    $this->fecha = $fecha;
  }



  public function __construct()
  {
    $this->db = database::connect();
  }


  public function getAll()
  {
    $publicaciones = $this->db->query("SELECT * FROM publicaciones ORDER BY id DESC");
    return $publicaciones;
  }
  public function getDatosPublicacion()
  {
    $inner = "SELECT u.id, u.nombre, u.apellidos, u.imagen, p.descripcion, p.imagen as 'imagenp', p.fecha FROM usuarios as u INNER JOIN publicaciones as p on u.id = p.usuario_id ORDER BY p.id DESC;";
    $datos = $this->db->query($inner);

    return $datos;
  }
  public function addPublicacion()
  {
    $sql = "INSERT INTO publicaciones VALUES (null, {$this->getUsuarioID()}, {$this->getActividadId()}, '{$this->getDescripcion()}', '{$this->getImagen()}', CURDATE()) ";
    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }
}
