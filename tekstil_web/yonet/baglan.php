<?php 
try{

    $db = new PDO("mysql:host=localhost;dbname=eticaret;charset=utf8", "root","");
 //   echo "Başarılı";
} catch (PDOException $e) {
  print $e->getMessage();
    exit;   
    }

$ayar = $db->query("SELECT * FROM ayar_tablosu")->fetch();


?>
