<?php 
//ID der gewünschten Seite aus der URL bekommen
$id=isset($_GET['id']) ? (int)$_GET['id'] : 0;
//Seite mit dieser aus DB ID laden
require_once 'db.php';
$stmt= $db->prepare("select * from seiten where id=? limit 1");
$stmt->bind_param('i',$id);
$stmt->execute();
$result=$stmt->get_result();
$seite=$result->fetch_object();
$result->free();
if(!$seite) {
  header('Location:index.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title><?= $seite->titel ?></title>  
</head>
<body>
<h1><?= $seite->titel ?></h1>
<?php
require_once 'menueleiste.php';
?>
<?= nl2br($seite->inhalt) ?>
</body>
</html>