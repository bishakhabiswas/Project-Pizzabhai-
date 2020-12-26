<?php
session_start();

//POST Data
$logid= $_POST['loguid'];
$logpass= $_POST['logupass'];

//server connection
$dbname= "pizzabhai";
$tblname= "emplist";
$conn= mysqli_connect("localhost","root","",$dbname);

//session variables
$_SESSION['id']= $logid;

//queries
$sql= "SELECT * FROM $tblname WHERE uid = '$logid'";


$result= mysqli_query($conn, $sql);
$row= mysqli_fetch_array($result);
$_SESSION['usrName']= $row['name'];


if($row['pass']==$logpass && strtolower($row['post'])!="admin"){
  header("Location:empView.php?id=$row[uid]");
}
else if($row['pass']==$logpass && strtolower($row['post'])=="admin"){
  header("Location:adminView.php");
}
else{
  header("Location:index.php");
}

?>