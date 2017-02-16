<?php
$dsn = 'pgsql:host=' . getenv('DB_ADDRESS') . ';dbname=' . getenv('DB_NAME');
$db_user = getenv('DB_USER');
$db_password = getenv('DB_PASSWORD');

function connectDb($dsn, $db_user, $db_password){
  try {
    return new PDO($dsn, $db_user, $db_password);
  } catch (PDOException $e) {
    echo $e->getMessage();
    exit;
  }
}

connectDb($dsn, $db_user, $db_password);
echo "success!";
