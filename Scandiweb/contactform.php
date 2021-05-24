
<?php
	include_once 'db_conn.php';
	
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}

  
        $sku =  $_REQUEST['sku'];
        $name = $_REQUEST['name'];
        $price =  $_REQUEST['price'];
        $type = $_REQUEST['type'];
		$dimension = $_REQUEST['dimension'];
        
        $sql = "INSERT INTO info VALUES ('$sku', 
            '$name','$price','$type','$dimension')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$sku\n $name\n "
                . "$price\n $type\n$dimension");
        } else{
            echo "ERROR: Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
		
 

