<?php
// connect to database
$dbname= "pizzabhai";
$tblname= "emplist";
$con=mysqli_connect("localhost","root","",$dbname);

// Downloads files
if (isset($_GET['id'])) {
    $id = $_GET['id'];

   // fetch file to download from database
   $sql ="SELECT * FROM $tblname WHERE uid = '$id'";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);
    $filepath =$row['photo'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($row['photo']));
        readfile($row['photo']);
        exit;
    }
}
?>