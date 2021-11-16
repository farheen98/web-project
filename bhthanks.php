<?php
    session_start();
    
    
    
    
?>



<!DOCTYPE html>
<html>
<head>
	<title>MADE IN HEAVEN</title>
	<link rel="stylesheet" type="text/css" href="css/indexstyle.css">
</head>
<body>



    <?php
    

    include("config.php");
    
    
   
   

    
     
	if($_SERVER["REQUEST_METHOD"]=="POST" && $_SESSION['log'] == true){
		$music = $_POST["music"];
        $guests =$_POST["guests"];
        $food = $_POST["food"];
        $ambience = $_POST["ambience"];
        $sql="INSERT INTO `bhramin` (`music`, `guests`, `food`, `ambience`) VALUES ('$music', '$guests', '$food', '$ambience')";
        $result = mysqli_query($db,$sql);




	}else{
        header("location:login.php");

    }





?>




	<header>
		<div class="main">
			<div class="logo">
				<a href="index.php"><img src="images/logo2.png">
				</div></a>
			</div>	
			<ul>
				<li ><a href="index.php" >HOME</a></li>
				
				<li><a href="gallery.php" >GALLERY</a></li>
				<li><a href="About.php" >ABOUT</a></li>
                <li><a href="contact.php" >CONTACT</a></li>
                
					
		</div>		
			<div class="title">
				<h1 style="text-align: center;">Your response has been recorded</h1>
				<h4 style="text-align: center;font-weight: lighter;color: white; margin-bottom: 70px;">Our team will get back to you shortly</h4>
			</div>	
		<div class="button">
			<a href="index.php" class="btn"> HOME</a>
		</div>	


	</header>			
</body>
</html>	