<?php

            if (isset($_COOKIE['lastVisit']))
                $LastVisit = "<p>Your last visit was on " . 
                $_COOKIE['lastVisit'];
            else
                $LastVisit = "<p>This is your first visit!</p>\n";

            setcookie("lastVisit", date("F j, Y, g:i a"),
                time()+60*60*24*365);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Last Visit</title>
    </head>
    <body>
        <?php

            echo $LastVisit;

        ?> 
    </body>
</html>