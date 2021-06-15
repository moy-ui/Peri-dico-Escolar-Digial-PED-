<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'helpers/Utils.php';
require_once 'config/parameters.php';
require_once 'views/layouts/header.php';

require_once 'controllers/PublicacionController.php';
require_once 'controllers/UsuarioController.php';

// Logica para mostras las demas vistas 

function showError()
{
  // $error = new ErrorController();
  // return $error->index();
}

if (isset($_GET['controller'])) {
  $nombreControlador = $_GET['controller'] . "Controller";
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
  $nombreControlador = CONTROLLER_DEFAULT;
  $action = ACTION_DEFAULT;
} else {
  showError();
  exit();
}

if (class_exists($nombreControlador)) {
  $controlador = new $nombreControlador();

  if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
    $action = $_GET['action'];
    $controlador->$action();
  } elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $actionDefault = ACTION_DEFAULT;
    $controlador->$actionDefault();
  } else {
    showError();
  }
} else {
  showError();
}



// Footer
require_once 'views/layouts/footer.php';