<?php
    $venueID1 = $_GET["venueID"];
    
    $conn = new PDO("mysql:host=localhost;dbname=ephp011;", "ephp011","caemahah");
 
    $conn->query("UPDATE venues  SET recommended=recommended+1 WHERE ID='$venueID1'");
		
	
		

?>