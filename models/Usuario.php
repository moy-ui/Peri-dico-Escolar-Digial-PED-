<?php

class Usuario
{
  private $id;
  private $nombre;
  private $apellidos;
  private $email;
  private $password;
  private $rol;
  private $imagen;

  private $db;


  function __construct()
  {
    $this->db = database::connect();
  }

  // Getters
  public function getId()
  {
    return $this->id;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getApellidos()
  {
    return $this->apellidos;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function getPassword()
  {
    return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
  }
  public function getRol()
  {
    return $this->rol;
  }
  public function getImagen()
  {
    return $this->imagen;
  }

  // Setters

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $this->db->real_escape_string($nombre);
  }
  public function setApellidos($apellidos)
  {
    $this->apellidos = $this->db->real_escape_string($apellidos);
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function setPassword($password)
  {
    $this->password = $password;
  }
  public function setRol($rol)
  {
    $this->rol = $rol;
  }
  public function setImagen($imagen)
  {
    $this->imagen = $imagen;
  }

  // Metodos para insertar
  public function save()
  {
    $sql = "INSERT INTO usuarios VALUES (null, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', null";
    if ($this->getImagen() != null) {
      $sql .= ", '{$this->getImagen()}'";
    } else {
      $sql .= ", null";
    }
    $sql .= ")";

    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
      $result = true;
    }

    return $result;
  }

  public function login()
  {
    $result = false;
    $email = $this->email;
    $password = $this->password;
    //Comporbar si exite el usuario
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = $this->db->query($query);
    if ($login && $login->num_rows == 1) {

      $usuario = $login->fetch_object();
      //verificar contraseña
      $verify = password_verify($password, $usuario->password);
      if ($verify) {
        $result = $usuario;
      }
    }
    return $result;
  }
}
