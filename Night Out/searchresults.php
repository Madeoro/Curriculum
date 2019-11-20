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
                            $a = $_GET["venue_type"];
                            // change databse connection when available
                            $conn = new PDO("mysql:host=localhost;dbname=ephp011;", "ephp011","caemahah");
                            $results = $conn->query("select * from venues where type='$a'");

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
       
                                    echo " Name " .$row["name"] ."<br/>" ;
                                    echo " Type " .$row["type"] . "<br/>" ; 
                                    echo " Description " .$row["description"]. "<br/>" ; 
                                    echo " Recommended " .$row["recommended"]. "<br/>";
                                    echo " Username  " .$row["username "]. "<br/>";
                                    echo "<a href='recommend.php?venueID=".$row["ID"] . "'<Recommend this venue</a> <br/>";
                                    echo "<a hreg='review.php'?venueID=".row["ID"] . "'View this venue reviews</a> <br/>";
                                    echo "<a hreg='addReview.php'?venueID=".row["ID"] . "'Add a revew to this venue </a> <br/>";
                                    $row = $results->fetch();
                                    
                                }
                            }
                    ?>
                </body>
            </html>
        <?php
    }
?>