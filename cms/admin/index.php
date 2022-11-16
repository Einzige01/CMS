<?php
require_once '../db.php';
//Webseiten aus der DB laden (nur ID und Titel)
$seiten=array();
$result=$db->query("select id,titel from seiten");
while($s=$result->fetch_object()){
  $seiten[]=$s;
}
$result->free();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>CMS Adminbereich</title>
</head>
<body>
<h1>CMS Adminbereich</h1>
<!-- Seiten als Liste bzw. Tabelle anzeigen -->
<table border="1" style="border-collapse:collapse;">
<?php 
foreach($seiten as $s) {
	echo '<tr>';
	echo '<th>';
	echo $s->titel;
	echo '</th>';
	echo '</tr>';
}

?>
<marquee "/>Herr Mouton unterrichtet gut!</marquee>
</table>
<br />
<!-- TODO Für jede Seite ein Link "Bearbeiten" und ein Link "Löschen" in der Tabelle -->
<!-- Nach der Tabelle, Formular, um eine Seite hinzuzufügen -->


<form action="hinzufuegen.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
 Titel:<input type="text" name="titel" id="titel" value="" /><br />
 Inhalt:<textarea name="inhalt" id="inhalt" style="width:400px;height:200px;"></textarea><br />
  <input type="submit" value="Hinzufügen" style="color: blue; background-color: #00BFFF; border-style: groove;border-radius:75px;" />
</body>
</html>
