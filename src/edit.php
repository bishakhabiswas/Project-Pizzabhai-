<?php
session_start();
if(isset($_SESSION['id'])==Null){
  session_destroy();
  header("Location:index.php");
}
if(isset($_POST['create'])){
  header("Location:index.php");
}
$id = $_GET['id'];

$dbname= "pizzabhai";
$tblname= "emplist";
$conn= mysqli_connect("localhost", "root", "", $dbname);
$sql= "SELECT * FROM $tblname WHERE uid = '$id'";
$result= mysqli_query($conn, $sql);
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Poppins:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="edit.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
</head>
<body>
<div class="nav-bar">
      <img src="images/PizzaBhai.png" alt="">
      <a href="<?php
        if(isset($_SESSION['post'])){
          echo "adminEmpView.php?id=$id";
        }
        else{
          echo "empView.php";
        }
      ?>">Cancel</a>
  </div>
  <div class="box top-margin">

    <form action="editProcess.php" method="post"enctype="multipart/form-data">
    
    <h1>Edit Employee Data</h1>
    <p>Fill up the form with correct values.</p>
    <div class="container">
<table>
  <tr>
    <td> <label for="userid"><b>Username </b></label> </td>
    <td><input value="<?php echo $row['uid'];?>" class="input-bar" type="text" name="userid" required
    placeholder="" disabled></td>
    <input value="<?php echo $row['uid']?>" class="input-bar" type="text" name="userid" required
    placeholder="" hidden>
  </tr> 

  <tr>  
    <td><label for="password"><b>Password </b></label></td>
    <td><input value="<?php echo $row['pass'];?>" class="input-bar" type="password" name="password" required
    placeholder=""></td>
  </tr>  

  <tr> 
    <td><label for="firstname"><b>Name </b></label></td>
    <td><input value="<?php echo $row['name'];?>" class="input-bar" type="text" name="firstname" required
    placeholder=""></td>
  </tr>

  <tr>  
    <td><label for="email"><b>Email </b></label></td>
    <td><input value="<?php echo $row['email'];?>" class="input-bar" type="email" name="email" required
    placeholder=""></td>
  </tr>

  <tr>  
    <td><label for="phone"><b>Phone Number </b></label></td>
    <td><input value="<?php echo $row['phn'];?>" class="input-bar" type="contact" name="phone" required
    placeholder=""></td>
  </tr> 

  <tr> 
    <td><label for="post"><b>Post </b></label></td>
    <td><input value="<?php echo $row['post'];?>" class="input-bar" type="text" name="post" required
    placeholder=""></td>
  </tr> 
  <tr>
    <td><label for="paddress"><b>Present Address </b></label></td>
    <td><input value="<?php echo $row['address'];?>" class="input-bar" type="text" name="paddress" required
    placeholder=""></td>
  </tr>
    <tr>
      <td colspan="2">
        <div  class="file-upload">
          <b class="file-upload">Upload Photo</b>
          <input type="file" name="file">
        </div>
      </td>
    </tr> 
</table>
</div>
      <input class="submit-button"type="submit" name="create" value="Done">
    </form>
  </div>
  
</body>
</html>