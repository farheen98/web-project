<html>
    <head>

    </head>
    <body>
        
    <div class="title">
				<h1>ENQUIRIES</h1>
                <h4 style="text-align: center;font-weight: lighter;color: white;">Recent enquiries</h4>
                  <table style="width:100%; margin-top:40px;">
                
                <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                    </tr>
                
                    <tr>
                        
                    <?php
                        /* Attempt MySQL server connection. Assuming you are running MySQL
                        server with default setting (user 'root' with no password) */
                        $link = mysqli_connect("localhost", "mamp", "", "heaven_db");
                        
                        // Check connection
                        if($link === false){
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        
                        // Attempt select query execution
                        $sql = "SELECT * FROM enquire";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['phone'] . "</td>";
                                        echo "<td>" . $row['message'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                // Free result set
                                mysqli_free_result($result);
                            } else{
                                echo "No records matching your query were found.";
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        
                        // Close connection
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