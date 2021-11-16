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
        <!--  <form class="register-form">
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <input type="text" placeholder="email address"/>
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
          </form> -->
          <?php
         include('config.php');
         // define variables and set to empty values
         $name = $email =  $dob = $pass = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email =$_POST["email"];
            $pass = $_POST["pass"];
            $cpass = $_POST["passc"];
            $sql="INSERT INTO `user` (`id`, `name`, `email`, `pass`) VALUES (NULL, '$name', '$email', '$pass')";
            $result = mysqli_query($db,$sql);
            if ($_POST["pass"] === $_POST["passc"]) {
              // success!?>
               <script> alert ("Registration succesful")</script><?php
               
            }
            else {
              ?>
               <script> alert ("passwords dont match")</script><?php
               header("Location: signup.php");
            }
            if(mysql_query($result)){
                ?>
               <script> alert ("Registration successful")</script><?php
               header("Location: login.php");
            }else{
                ?>
               <script> alert ("there was an error")</script><?php
               header("Location: signup.php");
            }
            
                }
                
         
        
      ?>




          <form class="login-form" method="POST" action="">
            <input type="text" placeholder="Full Name" name="name" />
            <input type="email" placeholder="Email" name="email" />

            <input type="password" placeholder="password" name="pass" />
            <input type="password" placeholder=" confirm password" name="passc" />
            <button type="submit">Register</button>
          </form>
           <p class="message">Already registered? <a href="login.php"> Log in</a></p>
          <div>
          </div>
        </div>
      </div>

  </header>     
</body>

</html> 