<?php
$con=mysqli_connect("localhost","root","","pizzabhai");

$uid=$_GET['id'];
$query="DELETE FROM emplist WHERE uid = '$uid'";

mysqli_query($con,$query);

header("Location:adminView.php");
?>