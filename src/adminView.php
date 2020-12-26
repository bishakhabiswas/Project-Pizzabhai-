<?php
session_start();
if(isset($_SESSION['id'])==Null){
  session_destroy();
  header("Location:index.php");
}
$dbname= "pizzabhai";
$tblname= "emplist";
$conn= mysqli_connect("localhost", "root","",$dbname);
$id= $_SESSION['id'];
$name= $_SESSION['usrName'];
$pagename = $name;

$sql1= "SELECT * FROM $tblname WHERE uid = '$id'";
$result1 = mysqli_query($conn, $sql1);
$adminData= mysqli_fetch_array($result1);

$_SESSION['post']= "admin";
$sql2= "SELECT * FROM $tblname";
$result2= mysqli_query($conn, $sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Poppins:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="adminView.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  echo "
  <title>$pagename</title>
  ";
  ?>
</head>
<body>
  <div class="nav">
  <img src="images/PizzaBhai.png" alt="">
  <a href="logoutProcess.php">Log Out</a>
  </div>
  <div class="middle">
  <div class="admin-data-section">
    <?php
    echo "
    <img src=$adminData[photo]>
    <h1>$adminData[name]</h1>
    <h3>Admin</h3>
    ";
    ?>
  </div>
  <div class="emplist-section">
    <h1>Employee List</h1>
    <div class="table-container">
      <table>
        <tr>
          <th>Photo</th>
          <th>Name</th>
          <th>Post</th>
          <th>Mobile</th>
          <th>More Details</th>
        </tr>
        <?php
          while($row= mysqli_fetch_assoc($result2)){
            echo "
            <tr>
              <td>
                <img src=$row[photo]>
              </td>
              <td>$row[name]</td>
              <td>$row[post]</td>
              <td>$row[phn]</td>
              <td>
                <a href=adminEmpView.php?id=$row[uid]>View</a>
              </td>
            </tr>
            ";
          }
        ?>
      </table>
    </div>
  </div>
  </div>
  <div class="footer">

  </div>
</body>
</html>
<?php
$_SESSION['flag']= "flag";
?>