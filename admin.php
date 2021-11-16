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


.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: black;
 	color: #fff;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 2;
}


.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 12px;
  text-decoration: none;
  display: block;
  text-align: left;
}


.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color:white;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.card-text,p{
    color:black;
}



    
    </style>
	<header>
		<div class="main">
			<div class="logo">
				<a href="admin.php"><img src="images/logo2.png">
				</div></a>
			</div>	
			<ul>
				<li class="active"><a href="admin.php" >HOME</a></li>
				
				
				<li ><a href="enq.php" >ENQUIRIES</a></li>
                
                
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
        </header>	
        


        
        </div>
        <div class="container">
            
			<div class="title">
				<h1 style="margin-left:150px">ADMIN DASHBOARD</h1>
                <h4 style="text-align: center;font-weight: lighter;color: white;">Recent enquiries</h4>
                <div class="card">

                <head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body> 
 
<div class="container" style="margin-top:40px">
  <h2 style="margin-left:350px;">Welcome Admin</h2>
  <div class="card-columns">
      <a href="adminHin.php"><div class="card bg-primary">
      <div class="card-body text-center" >
          
        <p class="card-text">HINDU MARRAIGES</p>
        <p> Popularity:  
        
        <?php 
                    // Setting up connection with database Geeks 
                    $connection = mysqli_connect("localhost", "mamp", "",  
                                                                "heaven_db"); 
                    
                    // Check connection 
                    if (mysqli_connect_errno()) 
                    { 
                        echo "Database connection failed."; 
                    } 
                    
                    // query to fetch Username and Password from 
                    // the table geek 
                    $query = "SELECT id FROM hindu"; 
                    
                    // Execute the query and store the result set 
                    $result = mysqli_query($connection, $query); 
                    
                    if ($result) 
                    { 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($result); 
                        
                        echo $row;
                    
                        // close the result. 
                        mysqli_free_result($result); 
                    } 
                
                    // Connection close  
                    mysqli_close($connection); 
                ?> 
        
        </p>
      </div>
    </div></a>
    
    <a href="adminMus.php"><div class="card bg-warning">
      <div class="card-body text-center">
        <p class="card-text">MUSLIM MARRIAGES</p>
        <p> Popularity:  
        
        <?php 
                    // Setting up connection with database Geeks 
                    $connection = mysqli_connect("localhost", "mamp", "",  
                                                                "heaven_db"); 
                    
                    // Check connection 
                    if (mysqli_connect_errno()) 
                    { 
                        echo "Database connection failed."; 
                    } 
                    
                    // query to fetch Username and Password from 
                    // the table geek 
                    $query = "SELECT id FROM muslim"; 
                    
                    // Execute the query and store the result set 
                    $result = mysqli_query($connection, $query); 
                    
                    if ($result) 
                    { 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($result); 
                        
                        echo $row;
                    
                        // close the result. 
                        mysqli_free_result($result); 
                    } 
                
                    // Connection close  
                    mysqli_close($connection); 
                ?> 
        
        </p>
      </div>
    </div></a>
    

<a href="adminBhr.php"><div class="card bg-success">
      <div class="card-body text-center">
        <p class="card-text">BHRAMIN MARRIAGES</p>
        <p> Popularity:  
        
        <?php 
                    // Setting up connection with database Geeks 
                    $connection = mysqli_connect("localhost", "mamp", "",  
                                                                "heaven_db"); 
                    
                    // Check connection 
                    if (mysqli_connect_errno()) 
                    { 
                        echo "Database connection failed."; 
                    } 
                    
                    // query to fetch Username and Password from 
                    // the table geek 
                    $query = "SELECT id FROM bhramin"; 
                    
                    // Execute the query and store the result set 
                    $result = mysqli_query($connection, $query); 
                    
                    if ($result) 
                    { 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($result); 
                        
                        echo $row;
                    
                        // close the result. 
                        mysqli_free_result($result); 
                    } 
                
                    // Connection close  
                    mysqli_close($connection); 
                ?> 
        
        </p>
      </div>
    </div></a>
    


    <a href="adminSik.php"><div class="card bg-success">
      <div class="card-body text-center">
        <p class="card-text">SIKH MARRIAGES</p>
        <p>Popularity:  
        
        <?php 
                    // Setting up connection with database Geeks 
                    $connection = mysqli_connect("localhost", "mamp", "",  
                                                                "heaven_db"); 
                    
                    // Check connection 
                    if (mysqli_connect_errno()) 
                    { 
                        echo "Database connection failed."; 
                    } 
                    
                    // query to fetch Username and Password from 
                    // the table geek 
                    $query = "SELECT id FROM sikh"; 
                    
                    // Execute the query and store the result set 
                    $result = mysqli_query($connection, $query); 
                    
                    if ($result) 
                    { 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($result); 
                        
                        echo $row;
                    
                        // close the result. 
                        mysqli_free_result($result); 
                    } 
                
                    // Connection close  
                    mysqli_close($connection); 
                ?> 
        
        </p>
      </div>
    </div></a>
    <a href="adminBen.php"><div class="card bg-danger">
      <div class="card-body text-center">
        <p class="card-text">BENGALI MARRIAGES</p>
        <p><p> Popularity:  
        
        <?php 
                    // Setting up connection with database Geeks 
                    $connection = mysqli_connect("localhost", "mamp", "",  
                                                                "heaven_db"); 
                    
                    // Check connection 
                    if (mysqli_connect_errno()) 
                    { 
                        echo "Database connection failed."; 
                    } 
                    
                    // query to fetch Username and Password from 
                    // the table geek 
                    $query = "SELECT id FROM beng"; 
                    
                    // Execute the query and store the result set 
                    $result = mysqli_query($connection, $query); 
                    
                    if ($result) 
                    { 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($result); 
                        
                        echo $row;
                    
                        // close the result. 
                        mysqli_free_result($result); 
                    } 
                
                    // Connection close  
                    mysqli_close($connection); 
                ?> 
        
        </p>
      </div>
    </div></a>
      
    <a href="adminMar.php"><div class="card bg-info">
      <div class="card-body text-center">
        <p class="card-text">MARWADI MARRIAGES</p>
        <p> Popularity:  
        
        <?php 
                    // Setting up connection with database Geeks 
                    $connection = mysqli_connect("localhost", "mamp", "",  
                                                                "heaven_db"); 
                    
                    // Check connection 
                    if (mysqli_connect_errno()) 
                    { 
                        echo "Database connection failed."; 
                    } 
                    
                    // query to fetch Username and Password from 
                    // the table geek 
                    $query = "SELECT id FROM marwadi"; 
                    
                    // Execute the query and store the result set 
                    $result = mysqli_query($connection, $query); 
                    
                    if ($result) 
                    { 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($result); 
                        
                        echo $row;
                    
                        // close the result. 
                        mysqli_free_result($result); 
                    } 
                
                    // Connection close  
                    mysqli_close($connection); 
                ?> 
        
        </p>
      </div>
    </div></a>
    <a href="adminChr.php"> <div class="card bg-info">
      <div class="card-body text-center">
        <p class="card-text">CHRISTIAN MARRIAGES</p>
        <p> Popularity:  
        
        <?php 
                    // Setting up connection with database Geeks 
                    $connection = mysqli_connect("localhost", "mamp", "",  
                                                                "heaven_db"); 
                    
                    // Check connection 
                    if (mysqli_connect_errno()) 
                    { 
                        echo "Database connection failed."; 
                    } 
                    
                    // query to fetch Username and Password from 
                    // the table geek 
                    $query = "SELECT id FROM christ"; 
                    
                    // Execute the query and store the result set 
                    $result = mysqli_query($connection, $query); 
                    
                    if ($result) 
                    { 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($result); 
                        
                        echo $row;
                    
                        // close the result. 
                        mysqli_free_result($result); 
                    } 
                
                    // Connection close  
                    mysqli_close($connection); 
                ?> 
        
        </p>
      </div>
                </div></a>
   
              <a href="adminGuj.php"><div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">GUJARATHI MARRIAGES</p>
        <p>Popularity:  
        
        <?php 
                    // Setting up connection with database Geeks 
                    $connection = mysqli_connect("localhost", "mamp", "",  
                                                                "heaven_db"); 
                    
                    // Check connection 
                    if (mysqli_connect_errno()) 
                    { 
                        echo "Database connection failed."; 
                    } 
                    
                    // query to fetch Username and Password from 
                    // the table geek 
                    $query = "SELECT id FROM guju"; 
                    
                    // Execute the query and store the result set 
                    $result = mysqli_query($connection, $query); 
                    
                    if ($result) 
                    { 
                        // it return number of rows in the table. 
                        $row = mysqli_num_rows($result); 
                        
                        echo $row;
                    
                        // close the result. 
                        mysqli_free_result($result); 
                    } 
                
                    // Connection close  
                    mysqli_close($connection); 
                ?> </p>
      </div>
    </div>
    </div>
  </div>
</div>
                  





                    
                           
                
            </div>	
            <div>
                
            </div>
            <div></div>
		
</div></a>  
      

			
</body>
</html>	


