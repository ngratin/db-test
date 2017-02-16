<?php
$dsn = 'mysql:host=' . getenv('DB_ADDRESS') . ';dbname=' . getenv('DB_NAME');
$db_user = getenv('DB_USER');
$db_password = getenv('DB_PASSWORD');

function connectDb(){
  try {
    return new PDO($dsn, $db_user, $db_password);
  } catch (PDOException $e) {
    echo $e->getMessage();
    exit;
  }
}

connectDb();
echo "success!";
