<?php
session_start();
?>

<html>

<head>
    <title>Solent e-Stores</title>
    <link rel='stylesheet' type='text/css' href='styles.css' />
    <script type="text/javascript">
    
    
    
    
    
    </script>
</head>
<body>
<?php
if(isset($_SESSION["isadmin"]) && $_SESSION["isadmin"]==1)
{
   

   // $conn = new PDO("mysql:host=localhost;dbname=assign039;", "assign039", "IeSooghu");
    $venueID1 = ["venueID"];
    $review = $GET["review"];
    $approved = $GET["approved"];
    $description = $GET["description"];
    $un = $GET["username"];
    
    //$conn->query("INSERT INTO review (venueID,review,description,approved,username) VALUES ($venueID1,$review,$description,$approved,$description,$un)");
.
   
}
else
{
    echo"Go away!";
}

?>
