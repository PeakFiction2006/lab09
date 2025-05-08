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

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['car_id'] . "</td>";
                echo "<td>" . $row['make'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['yom'] . "</td>";
                echo "</tr>";
            }
            }else {
            echo "<tr><td colspan='5'>There are no cars to display.</td></tr>";}
          
?>