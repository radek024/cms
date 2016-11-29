<html>
<head>
  <meta charset="UTF-8">
  <title>Treninga GULPa</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <?php
  include 'admin/inc/dbh.php';


    $sql="SELECT * FROM artykuly";
    $result=mysqli_query($conn,$sql);

  while($row=$result->fetch_assoc()){
    echo $row['tresc'];
  }
  echo "<br>zażółćasd gęślą jaźń";
  ?>
</body>
</html>
