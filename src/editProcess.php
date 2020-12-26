<?php
session_start();

$uid= $_POST['userid'];
$pass= $_POST['password'];
$name= $_POST['firstname'];
$email= $_POST['email'];
$phn= $_POST['phone'];
$post= $_POST['post'];
$address= $_POST['paddress'];

$dbname= "pizzabhai";
$tblname= "emplist";
$conn= mysqli_connect("localhost","root","",$dbname);

$sql1="UPDATE $tblname SET `pass`='$pass', `name`='$name', `email`='$email', `phn`='$phn', `post`='$post', `address`='$address' WHERE `uid`='$uid'";


//isset($_FILES['file']['name'])!=null
if($_FILES['file']['name']!=null){
  $file = rand(1000,100000)."-".$_FILES['file']['name'];
  $temp_loc = $_FILES['file']['tmp_name'];
  $folder="upload/";
  $final_file=str_replace(' ','-',$file);

  $supported_image = array('gif','jpg','jpeg','png');
  $ext = strtolower(pathinfo($final_file, PATHINFO_EXTENSION));

  if (in_array($ext, $supported_image)) {
    $upload_loc = $folder.$final_file;
    move_uploaded_file($temp_loc,$folder.$final_file);
    //update photo query
    $sql2="UPDATE $tblname SET `pass`='$pass', name='$name', `email`='$email', `phn`='$phn', `post`='$post', `address`='$address', `photo`='$upload_loc' WHERE `uid`='$uid'";
    mysqli_query($conn, $sql2);
  }
}
else{
  //without photo query
  mysqli_query($conn, $sql1);
}

if(isset($_SESSION['post'])){
  header("Location:adminEmpView.php?id=$uid");
}
else{
  header("Location:empView.php");
}
?>