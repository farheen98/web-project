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
				<h1>ADMIN DASHBOARD</h1>
                <h4 style="text-align: center;font-weight: lighter;color: white;">Recent enquiries</h4>
                  <table style="width:100%; margin-top:40px;">
                
                  <h2 style="color: White;text-transform:uppercase;font-weight:bold;margin-left:230px;margin-top:20px">muslim Marriages</h2>
                <tr style="text-transform:uppercase;">
                        
                        <th>Music</th>
                        <th>popularity</th>
                        
                    </tr>


                
                    <tr>
                        <?php
                        
                        $link = mysqli_connect("localhost", "mamp", "", "heaven_db");
                        
                        
                        if($link === false){
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        
                        
                        $sql = "SELECT music, COUNT(*) 
                                FROM muslim 
                                GROUP BY music 
                                 ;";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['music'] . "</td>";
                                        echo "<td>" . $row['COUNT(*)'] . "</td>";
                                        
                                    echo "</tr>";
                                }
                                echo "</table>";
                                
                                mysqli_free_result($result);
                            } else{
                                echo "No records matching your query were found.";
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        
                        
                        mysqli_close($link);
                        ?>
                       
                    </tr>
                    
                    
                </tbody>
                    
                    
                    </table>



                    <table style="width:100%; margin-top:40px;">
                
                  
                <tr style="text-transform:uppercase;">
                        
                        <th>Guests</th>
                        <th>popularity</th>
                        
                    </tr>


                
                    <tr>
                        <?php
                        
                        $link = mysqli_connect("localhost", "mamp", "", "heaven_db");
                        
                        
                        if($link === false){
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        
                        
                        $sql = "SELECT guests, COUNT(*) 
                                FROM muslim 
                                GROUP BY guests 
                                 ;";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['guests'] . "</td>";
                                        echo "<td>" . $row['COUNT(*)'] . "</td>";
                                        
                                    echo "</tr>";
                                }
                                echo "</table>";
                                
                                mysqli_free_result($result);
                            } else{
                                echo "No records matching your query were found.";
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        
                        
                        mysqli_close($link);
                        ?>
                       
                    </tr>
                    
                    
                </tbody>
                    
                    
                    </table>


                    <table style="width:100%; margin-top:40px;">
                
                  
                <tr style="text-transform:uppercase;">
                        
                        <th>Music</th>
                        <th>popularity</th>
                        
                    </tr>


                
                    <tr>
                        <?php
                        
                        $link = mysqli_connect("localhost", "mamp", "", "heaven_db");
                        
                        
                        if($link === false){
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        
                        
                        $sql = "SELECT food, COUNT(*) 
                                FROM muslim 
                                GROUP BY food 
                                 ;";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['food'] . "</td>";
                                        echo "<td>" . $row['COUNT(*)'] . "</td>";
                                        
                                    echo "</tr>";
                                }
                                echo "</table>";
                                
                                mysqli_free_result($result);
                            } else{
                                echo "No records matching your query were found.";
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        
                        
                        mysqli_close($link);
                        ?>
                       
                    </tr>
                    
                    
                </tbody>
                    
                    
                    </table>


                    <table style="width:100%; margin-top:40px;">
                
                  
                <tr style="text-transform:uppercase;">
                        
                        <th>Music</th>
                        <th>popularity</th>
                        
                    </tr>


                
                    <tr>
                        <?php
                        
                        $link = mysqli_connect("localhost", "mamp", "", "heaven_db");
                        
                        
                        if($link === false){
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        
                        
                        $sql = "SELECT ambience, COUNT(*) 
                                FROM muslim 
                                GROUP BY ambience 
                                 ;";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['ambience'] . "</td>";
                                        echo "<td>" . $row['COUNT(*)'] . "</td>";
                                        
                                    echo "</tr>";
                                }
                                echo "</table>";
                                
                                mysqli_free_result($result);
                            } else{
                                echo "No records matching your query were found.";
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        
                        
                        mysqli_close($link);
                        ?>
                       
                    </tr>
                    
                    
                </tbody>
                    
                    
                    </table>






                    
                           
                
            </div>	
            <div>
                
            </div>
            <div></div>
		
</div>

			
</body>
</html>	


