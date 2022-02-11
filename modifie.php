<?php  

$connect=mysqli_connect("localhost","root","","e-class-db");
$id=$_GET['id'];
if(isset($_POST['submit'])){
$updat="UPDATE `student-list` SET `name`='$_POST[name]',`Email`='$_POST[Email]',`Phone`='$_POST[Phone]',`Enroll_number`='$_POST[Enroll_number]',`Date_of_Admition`='$_POST[Date_of_Admition]' WHERE id='$id'";
mysqli_query( $connect,$updat); 
header('location:add_stdent.php');
}  
$select="SELECT * FROM `student-list` WHERE id='$id'"; 
mysqli_query($connect, $select);  

?>