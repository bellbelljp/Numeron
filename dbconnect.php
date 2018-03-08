<?php
// $db = mysqli_connect('localhost', 'root', 'root', 'mydb2') or die(mysqli_connect_error());
// mysqli_set_charset($db, 'utf8');

  try{
    $pdo = new PDO('mysql:host=localhost;dbname=mydb2;charset=utf8', 'root', 'root');
  }
  catch(PDOException $e){
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());
  }

?>

