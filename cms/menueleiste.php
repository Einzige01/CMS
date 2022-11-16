<?php
require_once 'db.php';
//Webseiten aus der DB laden (nur ID und Titel)
$seiten=array();
$result=$db->query("select id,titel from seiten");
while($s=$result->fetch_object()){
  $seiten[]=$s;
}
$result->free();
?>
<style>
#menue {
  display:inline-block;
  border:1px solid black;
  padding:10px;
}
#menue a {
  display:block;
}
</style>
<div id="menue">
<?php
foreach($seiten as $s) {
?>
	<a href="seiteanzeigen.php?id=<?= $s->id ?>"><?= $s->titel ?></a>
<?php
}
?>
</div>
