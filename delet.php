<?php

$connect=mysqli_connect("localhost","root","","e-class-db");
$id=$_GET['id']; 
$delete="DELETE FROM `student-list` WHERE id='$id'";
mysqli_query($connect,$delete);
header('location:Students_liste.php');
?>