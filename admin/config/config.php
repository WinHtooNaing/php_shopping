<?php

define('MYSQL_USER','winhtoonaing');
define('MYSQL_PASSWORD','root');
define('MYSQL_HOST','localhost');
define('MYSQL_DATABASE','php_shopping');

$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);

$pdo = new PDO(
  'mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DATABASE,MYSQL_USER,MYSQL_PASSWORD,$options
);

?>
