<?php
    $servername = "localhost";
    $username = "root";
    $password = '';
    $databasename = "hms";

    $con = mysqli_connect($servername, $username, $password, $databasename );

        if($con)
        {echo "";} 
        else 
        {echo "Not Conneted";}

?>