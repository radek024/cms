<?php include 'dbh.php'; ?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Treninga GULPa</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
  <div class="wrapper">
  <header><h1>Edytuj artykuł</h1></header>
<?php
$id=$_GET['id'];
$sql="select * from artykuly where id_art=".$id;
$result=mysqli_query($conn, $sql);
while($row=$result->fetch_assoc()){
 ?>
  <form action="modifyart.php?id=<?php echo $id; ?>&action=edit" method="post" class="data-form">
    <input type="text" name="tytul" value="<?php echo $row['tytul'] ?>" placeholder="Tytuł"/>
    <input type="text" name="autor" value="<?php echo $row['autor'] ?>" placeholder="Autor"/>
    <input type="date" name="data" value="<?php echo $row['data'] ?>" placeholder="Data"/>
    <?php include 'catlist.php';?>
    <input type="text" name="tresc" value="<?php echo $row['tresc'] ?>" placeholder="Treść"></textarea>
    <button type="submit">Wyślij</button>
  </form>
  </div>
  <?php } ?>
</body>
</html>
