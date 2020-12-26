<?php
$con=mysqli_connect("localhost","root","","pizzabhai");

$uid=$_POST['userid'];
$pass=$_POST['password'];
$name=$_POST['firstname'];
$email=$_POST['email'];
$phn=$_POST['phone'];
$post=$_POST['post'];
$nid=$_POST['nid'];
$address=$_POST['paddress'];
$bg=$_POST['bgroup'];
$gender=$_POST['gender'];
$date=$_POST['date'];

$file = rand(1000,100000)."-".$_FILES['file']['name'];
$temp_loc = $_FILES['file']['tmp_name'];
$folder="upload/";
$final_file=str_replace(' ','-',$file);

$supported_image = array('gif','jpg','jpeg','png');
$ext = strtolower(pathinfo($final_file, PATHINFO_EXTENSION));

if (in_array($ext, $supported_image)) {
$upload_loc = $folder.$final_file;
move_uploaded_file($temp_loc,$folder.$final_file);
$query="INSERT INTO emplist VALUES ('$uid', '$pass', '$name', '$email', '$phn', '$post', '$nid', '$address', '$bg', '$gender', '$date', '$upload_loc')";
mysqli_query($con,$query);
}

header("Location:index.php");
    
?> 