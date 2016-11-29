<html>
<head>
  <meta charset="UTF-8">
  <title>Treninga GULPa</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="wrapper">
  <header><h1>Widok: kategorie</h1></header>
<?php
include '/inc/dbh.php';

$sql="SELECT * FROM kategorie";
$result=mysqli_query($conn,$sql);
echo "<table>";
echo "<tr class='desc'><td>ID</td><td>Nazwa</td><td>Opis</td><td colspan=2>Akcje</td></tr>";
while($row=$result->fetch_assoc()){
  echo "<tr>";
echo "<td>".$row['id_kat']."</td><td>".$row['nazwa']."</td><td>".$row['opis']."</td>";
echo "<td><a href='inc/modifycatform.php?id=".$row['id_kat']."'>Edytuj</a></td><td><a href='inc/modifycat.php?id=".$row['id_kat']."&action=delete' id='del'>Usuń</a></td>";
  echo "</tr>";
}
echo "<tr><td colspan='5'><a href='inc/addcategory.php'>Dodaj kategorię...</a></td></tr>";
echo "</table>";
include 'inc/menu.php'

?>
</div>
<?php// include 'inc/scripts.php' ?>
<script href="./js/main.js"></script>
</body>
</html>
