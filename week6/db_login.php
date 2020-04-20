<?php
  require_once 'DB.php';
  # parameters for connecting to the "business_service" 
  $hostspec = 'localhost:32769';
  $username = 'demo';
  $password = 'password';
  $database = 'business_service';
  $dbtype = 'mysqli';
  $dsn = array(
    'phptype'  => $dbtype,
    'username' => $username,
    'password' => $password,
    'hostspec' => $hostspec,
    'database' => $database,
  );
  # DSN constructed from parameters 
  # Establish the connection
  $db = DB::connect($dsn);
  if (DB::isError($db)) {
    die ($db->getMessage());
  }
?>