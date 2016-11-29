<?php
$conn=mysqli_connect("localhost", "root", "", "szt");
if(!$conn){
  die("Nie udało się połączyć: ".mysqli_connect_error());
}
