<?php
    require_once "settings.php";
    $dbconn = @mysqli_connect($host, $username, $password , $database);
    if($dbconn){
        $query = "SELECT * FROM cars";
        $result = mysqli_query($dbconn, $query);
        if ($result){
            if (mysqli_num_rows($result) > 0) {
                echo("<table>");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['car_id'] . "</td>";
                    echo "<td>" . $row['make'] . "</td>";
                    echo "<td>" . $row['model'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['yom'] . "</td>";
                    echo "</tr>";
                }
                echo("</table>");
            } else {
                echo "<tr><td colspan='5'>There are no cars to display.</td></tr>";
            }
        } else {
            // Handle query error
            echo "<tr><td colspan='5'>Error executing query.</td></tr>";
        }
        mysqli_close($dbconn);
    } else {
        echo "<p>Unable to connect to the database.</p>";
    }
?>