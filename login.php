<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $type = $_POST['user-type'];
      $sql = "SELECT id FROM user WHERE name = '$myusername' and pass = '$mypassword' and usertype ='$type'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['usertype'];
      
      $count = mysqli_num_rows($result);
      
      


      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1 && $type =='Admin') {
         
        
         $_SESSION['login_user'] = $myusername;
         $_SESSION['logged_in'] = true; 
         header("location: admin.php");
      }
      else if ($count == 1 && $type == 'User'){
        $_SESSION['login_user'] = $myusername;
        $_SESSION['log'] = true; 
         header("location: User.php");
      }


      if($count == 0){

          echo "<script> alert('Your Login Name or Password is invalid');</script>";
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html>
<head>
  <title>MADE IN HEAVEN</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">


</head>
<body>
  <header>
      <div class="main">
          <div class="logo">
            <a href="index.php"><img src="images/logo2.png">
            </div></a>
          </div>
    <div class="title">
        <h1>MADE IN HEAVEN</h1>
      </div>  
      <div class="login-page">
        <div class="form">
         
          <form class="login-form" action="" method="POST">
            <input type="text" placeholder="username" name="username" />
            <input type="password" placeholder="password" name="password" />
            <select name="user-type" style="margin-bottom:20px;margin-top:10px">
              <option value="Admin">Admin</option>
              <option value="User">User</option>
            </select>
            <button type="submit">login</button>
            <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
          </form>
        </div>
      </div>

  </header>     
</body>

</html> 