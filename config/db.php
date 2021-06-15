<?php

class database
{

  public static function connect()
  {
    $db = new mysqli("localhost", "root", "", "PED");
    $db->query("SET NAMES 'utf-8' ");
    return $db;
  }
}
