CREATE DATABASE PED;

USE PED;

CREATE TABLE usuarios
(
  id int(255)
  auto_increment not null,
  nombre        varchar
  (100) not null,
  apellidos     varchar
  (255) null,
  email         varchar
  (255) not null,
  password      varchar
  (255) not null,
  rol           varchar 
  (20) null,
  imagen        varchar 
  (255) null,

  CONSTRAINT pk_usuarios PRIMARY KEY
  (id),
  CONSTRAINT uk_email UNIQUE
  (email)
)ENGINE=InnoDB;

CREATE TABLE secciones(
  id int(255) auto_increment not null,
  nombre varchar(255),

  CONSTRAINT pk_secciones PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE actividad(
  id int(255) auto_increment not null,
  seccion_id int(255) not null,
  nombre varchar(50) not null,
  descripcion varchar(150) not null,
  imagen varchar(255) null,

  CONSTRAINT pk_actividad PRIMARY KEY (id),
  CONSTRAINT fk_actividad_seccion FOREIGN KEY (seccion_id) REFERENCES secciones (id)
  )ENGINE=InnoDB;


CREATE TABLE publicaciones(
  id int(255) auto_increment not null,
  usuario_id int(255) not null,
  actividad_id int (255) null,
  descripcion text,
  imagen varchar(255) null,
  fecha date,

  CONSTRAINT pk_publicaciones PRIMARY KEY (id),
  CONSTRAINT fk_publicacion_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios (id),
  CONSTRAINT fk_publicacion_actividad FOREIGN KEY (actividad_id) REFERENCES actividad (id)
)ENGINE=InnoDB;

CREATE TABLE eventos(
  id int(255) auto_increment not null,
  titulo varchar(100),
  CONSTRAINT pk_eventos PRIMARY KEY (id)
)ENGINE=InnoDB;

