<?php

spl_autoload_register(function ($classname) {
  require_once 'controllers/' . $classname . '.php';
});
