<?php
    require_once"settings.php";
    $dbconn = @mysqli_connect($host, $user, $pwd, $sql_db)
    if($dbconn){

        query "SELECT*FROM cars";
        if ($result){...}
        else {...}
        ...
        mysqli_close($dbconn);
        }else echo "<p>unable to connect to the db.</p>";
?>