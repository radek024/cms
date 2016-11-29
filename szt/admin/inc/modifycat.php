<?php
include 'dbh.php';
  if(isset($_GET['action']) && isset($_GET['id'])){
  $action= $_GET['action'];
  $cat_id= $_GET['id'];
  if($action == 'delete') $sql="delete from kategorie where id_kat=".$cat_id;
  else if($action == 'edit') $sql="update kategorie set nazwa='".$_POST['nazwa']."', opis='".$_POST['opis']."' where id_kat=".$cat_id;
  else if($action == 'add') $sql="insert into kategorie(nazwa,opis) values('".$_POST['nazwa']."','". $_POST['opis']."')";

  mysqli_query($conn, $sql);
  header("Location: ../categories.php?opis=Dane zaktualizowane!");
  }else{
  header("Location: ../index.php");
} ?>
</body>
</html>
