<?php
session_start();
// Test that the authentication session variable exists
if ( !isset ($_SESSION["gatekeeper"]))
{
    echo "You're not logged in. Go away!";
}
else
{
    ?>
    <!DOCTYPE html>
<html>
    <head>
    <title>Night Out</title>
       
        <link rel="stylesheet" href="styles.css?=v1.0">
    </head>
    <body>
        <div id="wrapper">
            <header id="header">
                 <h1>Welcome to Night Out</h1>
            </header>
   <p>Search a range of restaurants, cafés, and pubs, contibute with restaurants, cafes and pups or simply review the ones you have been.<p>
        
        <form method="get" action="searchresults.php">
      <p> Venu type:</p> <br>
            <input type="text" name="venue_type"><br>
            <input type="submit" value="Submit">
        </form>
            </div>
    </body>
    </  html> 
    <?php
}
?>
