<?php include 'dbh.php'; ?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Treninga GULPa</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
  <div class="wrapper">
  <header><h1>Edytuj kategorię</h1></header>
<?php
$id=$_GET['id'];
$sql="select * from kategorie where id_kat=".$id;
$result=mysqli_query($conn, $sql);
while($row=$result->fetch_assoc()){
 ?>
  <form action="modifycat.php?id=<?php echo $id; ?>&action=edit" method="post" class="data-form">
    <input type="text" value="<?php echo $row['nazwa'] ?>" name="nazwa" placeholder="Nazwa">
    <input type="text" value="<?php echo $row['opis'] ?>" name="opis" placeholder="Opis">
    <button type="submit">Wyślij</button>
  </form>
  </div>
  <?php } ?>
</body>
</html>
