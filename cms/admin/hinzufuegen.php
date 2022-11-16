<?php
require_once '../db.php';

$titel=isset($_POST['titel']) ? $_POST['titel'] : '';
if(empty($titel)) {
  header('Location:index.php');
  exit;
}
$inhalt=isset($_POST['inhalt']) ? str_replace("\r","\n",str_replace("\r\n","\n",$_POST['inhalt'])) : null;
if(empty($inhalt)) {
  header('Location:index.php');
  exit;
}


$stmt=$db->prepare("insert into seiten(titel,inhalt) values(?,?)");
$stmt->bind_param('ss',$titel,$inhalt);
$stmt->execute();

header('Location:index.php');
exit;
?>