<!DOCTYPE html>
<html>
<head>
  <title>MADE IN HEAVEN</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body {
  font-family: 'Raleway', sans-serif;
  margin-top: 50px;
  background:gainsboro;
}

.green-contact-form {
  width: 700px;
  margin:0 auto;
  border-radius:10px;
}

.logo img{
  float: left;
  width: 150px;
  height: auto;
}
.main{
  max-width: 1200px;
  margin: auto;
}


.title-form {
  max-width: 550px;
}


    </style>

</head>
<body>
  <header>
      <div class="main">
          <div class="logo">
            <a href="index.php"><img src="images/logo2.png">
            </div></a>
          </div>
    <div class="title" style="margin-left:43%;">
        <h1>MADE IN HEAVEN</h1>
      </div>  
      <div class="green-contact-form ">
  
            <div class="title-form mb-5" >
              <h3>Get in touch</h3>
              <p>We are very approachable and would love to speak to you. Feel free to call, send us an email, Tweet us or simply complete the enquiry form.</p>
            </div>
            
            <div class="form-box"style="top: 50%;left: 50%;">
              <h4>Send Us a Message</h4>



              <?php

                include("config.php");

                if($_SERVER["REQUEST_METHOD"]=="POST"){
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $phone = $_POST['phone'];
                  $message = $_POST['message'];
                  $sql = "INSERT INTO `enquire` (`id`,`name`,`email`,`phone`,`message`) VALUES (NULL,'$name','$email','$phone','$message') ";
                  $result = mysqli_query($db,$sql);




                }
                ?>
              
                    <form action="thanks.php" method="POST">
                      <fieldset class="form-group">
                        <label for="yourName">Your Name (required)</label>
                        <input type="text" name="name" class="form-control" id="yourName" placeholder="Enter Your Name" required>
                      </fieldset>
          
                      <fieldset class="form-group">
                        <label for="yourEmail">Email Adressess (required)</label>
                        <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Enter Your Email" required>
                      </fieldset>
          
                      <fieldset class="form-group">
                        <label for="yourPhone">Telephone number</label>
                        <input type="text" name="phone" class="form-control" id="yourPhone" placeholder="Enter Your Phone">
                      </fieldset>
          
                      <fieldset class="form-group">
                        <label for="yourEmail">Your message (required)</label>
                        <textarea name="message" class="form-control" rows="6"></textarea>
                      </fieldset>
                      <button id="done" type="submit"  class="btn btn-dark" required >SEND MESSAGE</button>
                    </form>
              
            </div>
          </div>

  </header>     
</body>
<script>
document
  .getElementById("done")
  .addEventListener("submit", function(e) {
    e.preventDefault();
    window.location.href = "thanks.php";
  });
  </script>

</html> 