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
    <style>
    /* Navbar container */


/* The dropdown container */


/* Dropdown button */
.dropdown .dropbtn {
  text-decoration: none;
     color: white;
     margin-top:12px;
     padding: 5px 15px;
     background-color:transparent;
 	
 	font-size: 20px;
 	transition: 0.2s ease;
     border: 1px solid transparent;
     
     
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: black;
 	color: #fff;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 2;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 12px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
    
    </style>
	<header>
		<div class="main">
			<div class="logo">
				<a href="index.php"><img src="images/logo2.png">
				</div></a>
			</div>	
			<ul>
				<li ><a href="index.php" >HOME</a></li>
				
				<li><a href="gallery.php" >GALLERY</a></li>
				<li class="active"><a href="About.php" >ABOUT</a></li>
                <li><a href="contact.php" >CONTACT</a></li>
                
					<?php
						
						if (isset($_SESSION['login_user'])) {
					?>
					<li >
					<div class="dropdown">
                    <button style="text-transform:UPPERCASE;" class="dropbtn"> <a > <?php echo $_SESSION['login_user'];?></a> 
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="logout.php">Logout</a>
                    
                    </div>
				</div>
				
				
					<?php
					}else{
					?>	
						<li>	
					<a href="login.php">LOG IN</a>
				</li>
			<?php
			}
					
					?>
					
						
					
				</li>
					
					
					
									
			

				
				
				
				
				
				
                <li ></li>
			</ul>	
		</div>		
			<div class="title" style="margin-bottom: 20px;">
				<h1 style="text-align: center;">ABOUT US</h1>
				<p style="text-align: center;color:pink;">The Event Company is an end to end wedding planning brand located in Mangalore, curating theme based decor and entertainment being their USP. Their decor ideas and designs are definitely a source of inspiration that will surely make your venue look outstanding from every angle. Being in the wedding industry for the past five years the brand totally focusses on superior quality and maximum customer satisfaction.</p>
			</div>	
			


	</header>
	
	
</body>
</html>	