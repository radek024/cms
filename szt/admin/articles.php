<html>
<head>
  <meta charset="UTF-8">
  <title>Treninga GULPa</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="wrapper">
  <header><h1>Widok: artykuły</h1></header>
<?php
include '/inc/dbh.php';
$sql="SELECT artykuly.*, kategorie.* FROM artykuly inner join kategorie where artykuly.kategoria=kategorie.id_kat";
$result=mysqli_query($conn,$sql);
echo "<table>";
echo "<tr class='desc'><td>ID</td><td>Tytul</td><td>Autor</td><td>Data</td><td>Kategoria</td><td>Treść</td><td colspan=2>Akcje</td></tr>";
while($row=$result->fetch_assoc()){
  echo "<tr>";
echo "<td>".$row['id_art']."</td><td>".$row['tytul']."</td><td>".$row['autor']."</td><td>".$row['data']."</td><td>".$row['nazwa']."</td><td>".implode(' ', array_slice(explode(' ', $row['tresc']), 0, 10))."...</td>";
echo "<td><a href='inc/modifyartform.php?id=".$row['id_art']."'>Edytuj</a></td><td><a href='inc/modifyart.php?id=".$row['id_art']."&action=delete' id='del'>Usuń</a></td>";
  echo "</tr>";
}
echo "<tr><td colspan='8'><a href='inc/addarticle.php'>Dodaj artykul...</a></td></tr>";
echo "</table>";

include 'inc/menu.php'

?>
</div>
<?php include 'inc/scripts.php' ?>
</body>
</html>
