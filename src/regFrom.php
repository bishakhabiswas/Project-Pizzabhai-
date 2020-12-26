<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Poppins:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="regForm.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Registration</title>
  
</head>

<body>
  

<div>
  <?php
  if(isset($_POST['create'])){
    header("Location:index.php");
  }
  ?>
</div>
  <div class="nav-bar">
      <img src="images/PizzaBhai.png" alt="">
      <a href="index.php">Cancel</a>
  </div>
  <div class="box">

    <form action="regProcess.php" method="post"enctype="multipart/form-data">
    
    <h1> Employee Registration</h1>
    <p>Fill up the form with correct values.</p>
    <div class="container">
<table>
  <tr>
    <td> <label for="userid"><b>Username </b></label> </td>
    <td><input class="input-bar" type="text" name="userid" required
    placeholder=""></td>
  </tr> 

  <tr>  
    <td><label for="password"><b>Password </b></label></td>
    <td><input class="input-bar" type="password" name="password" required
    placeholder=""></td>
  </tr>  

  <tr> 
    <td><label for="firstname"><b>Name </b></label></td>
    <td><input class="input-bar" type="text" name="firstname" required
    placeholder=""></td>
  </tr>

  <tr>  
    <td><label for="email"><b>Email </b></label></td>
    <td><input class="input-bar" type="email" name="email" required
    placeholder=""></td>
  </tr>

  <tr>  
    <td><label for="phone"><b>Phone Number </b></label></td>
    <td><input class="input-bar" type="contact" name="phone" required
    placeholder=""></td>
  </tr> 

  <tr> 
    <td><label for="post"><b>Post </b></label></td>
    <td><input class="input-bar" type="text" name="post" required
    placeholder=""></td>
  </tr> 

  <tr>
    <td><label for="nid"><b>National ID </b></label></td>
    <td><input class="input-bar" type="text" name="nid" required
    placeholder=""></td>
  </tr>  

  <tr>
    <td><label for="paddress"><b>Present Address </b></label></td>
    <td><input class="input-bar" type="text" name="paddress" required
    placeholder=""></td>
  </tr>

  <tr>
    <td><label for="bgroup"><b>Blood Group </b></label></td>
    <td><select name="bgroup">
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
        </select></td>
    </tr>

  <tr>  
    <td><label for="gender"><b>Gender </b></label></td>
    <td>
      <input type="radio" name="gender" value="Male">Male
      <input type="radio" name="gender" value="Female">Female
      <input type="radio" name="gender" value="other">Other
    </td>
  </tr>
  <tr>           
    <td><label for="date"><b>Birth Date </b></label></td>
    <td><input class="input-bar" type="Date" name="date"></td>
    <tr>
      <td colspan="2">
        <div  class="file-upload">
      <b class="file-upload">Upload Photo</b>
      <input type="file" name="file">
</div>
      </td>
    </tr>
  </tr>  
</table>
</div>
    

     <input class="submit-button"type="submit" name="create" value="Done">

     

    </form>
  </div>
  
</body>
</html>