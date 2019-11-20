<?php
    session_start();

    if ( !isset ($_SESSION["gatekeeper"]))
    {
        echo "You're not logged in. Go away!";
    }
    else
    {
        ?>
            <html> 
                <body>
                    <h1>Database results!</h1>
                        <?php
                         $venueID1 = $_GET["venueID"];
    
                            $conn = new PDO("mysql:host=localhost;dbname=ephp011;", "ephp011","caemahah");
 
                            $results = $conn->query("select * from reviews where venueID='$venueID1'");
                            $results = $conn->query("select * from reviews where venueID='$venueID1'");

                            $row = $results->fetch();

                            if ($row == false) 
                            {
                                echo "No matching rows!";
                            }
                            else
                            {
    // note that != means 'not equal to'
                                while ($row != false) 
                                {
       
                                    echo " Username " .$row["username"] ."<br/>" ;
                                    echo " Review " .$row["review"] . "<br/>" ; 
                                    echo " Approved " .$row["approved"]. "<br/>" ; 
                                    $row = $results->fetch();
                                    
                                }
                            }
                    ?>
                </body>
            </html>
        <?php
    }
?>