<?php
include 'dbh.php';

$sql="select * from kategorie";

$result=mysqli_query($conn, $sql);

echo "<select name='kategoria'>";
while($row=$result->fetch_assoc()){
  echo "<option value='".$row['id_kat']."'>".$row['nazwa']."</option>";
}
echo "</select>";
