<html>
<head>
  <meta charset="UTF-8">
  <title>Treninga GULPa</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
  <div class="wrapper">
  <header><h1>Dodaj artykuł</h1></header>
  <form action="modifyart.php?id=0&action=add" method="POST" class="data-form">
    <input type="text" name="tytul" placeholder="Tytuł" required/>
    <input type="text" name="autor" placeholder="Autor" required/>
    <input type="date" name="data" placeholder="Data" required/>
    <!--<input type="text" name="kategoria" placeholder="Kategoria" value="1"/>-->
    <?php include 'catlist.php'; ?>
    <textarea name="tresc" placeholder="Treść" required></textarea>
    <button type="submit">Wyślij</button>
  </form>
</div>
<?php
include 'menu.php' ?>
</body>
</html>
