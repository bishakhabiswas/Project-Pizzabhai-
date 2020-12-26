<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="landingPageStyle.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Poppins:wght@200&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
</head>
<body>
  <div class="container">
    <div class="navbar">
    <div class="logo"><img src="images/PizzaBhai.png" alt="logo" srcset=""></div>
            <div></div>
            <div><a class="button" href="regFrom.php">Register</a></div>
            
    </div>
    <div class="middle">
            <div class="left"><h3>PIZZA MAKES <span>EVERYTHING</span> POSSIBLE.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ratione laudantium suscipit ipsa optio qui nostrum at reprehenderit itaque harum.</p></div>
            <div class="middle right">
                <div class="login-form">
                    <h1>Login</h1>
                    <form action="loginProcess.php" method="post">
                        <div>
                            <i class="fas fa-user" style="font-size: 20px;"></i>
                            <label for="loguid">Username</label>
                            <input type="text" name="loguid" id="loguid"  required>
                        </div>
                        <div>
                            <i class="fas fa-key" style="font-size: 20px;"></i>
                            <label for="logupass">Password</label>
                            
                            <input type="password" name="logupass"  id="logupass" required>
                        </div>
                      
                      
                      <input class="" type="submit" value="Login">
                      <?php
            if(isset($_SESSION['id'])){
              echo "<h3 class=warnning-1 >Incorrect username or password.</h3>";
              session_destroy();
            }
          ?>
                      
                    </form>
                    
                  </div>
            </div>
        </div>
    <div class="footer">
    <div>Follow Us<br>
    <button><i class="fab fa-facebook-f"></i></button>
    <button><i class="fab fa-instagram"></i></button>
    <button><i class="fab fa-twitter"></i></button>
    </div>
    <div>© 2020 , Pizza Bhai Bangladesh. All rights reserved.</div>
    <div>Developed By 53Batch, BU</div>
    </div>
  </div>
</body>
</html>