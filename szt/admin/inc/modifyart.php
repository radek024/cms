<?php
include 'dbh.php';
  if(isset($_GET['action']) && isset($_GET['id'])){
  $action= $_GET['action'];
  $art_id= $_GET['id'];
  if($action == 'delete') $sql="delete from artykuly where id_art=".$art_id;
  else if($action == 'edit') $sql="update artykuly set tytul='".$_POST['tytul']."', autor='".$_POST['autor']."', data='".$_POST['data']."', kategoria='".$_POST['kategoria']."', tresc='".$_POST['tresc']."' where id_art=".$art_id;
  else if($action == 'add') $sql="insert into artykuly(tytul, autor, data, kategoria, tresc) values('".$_POST['tytul']."',
'".$_POST['autor']."',
'".$_POST['data']."',
'".$_POST['kategoria']."',
'".$_POST['tresc']."')";

  mysqli_query($conn, $sql);
  header("Location: ../articles.php?opis=Dane zaktualizowane!");
  }else{
  header("Location: ../index.php");
} ?>
</body>
</html>
