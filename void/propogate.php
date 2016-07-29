<?php

$servername = "localhost";
$username = "root";
$password = "naoko";
$dbname = "folio";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM blog ORDER BY id DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $numResults = mysql_num_rows($result);
    $counter = 0;
     // output data of each row
     while($row = $result->fetch_assoc()) {
             echo "<div class=\"post-preview\">";
             $date = $row["date"];
             $directory = "/void/".$date;
             echo "<a href='" . $directory . "'>";
             echo "<h2 class=\"post-title\">" . $row["title"] . "</h2>";
             echo "<h3 class=\"post-subtitle\">" . $row["subtitle"] . "</h3>";
             echo "</a>";
             $month = substr($date, 0, 2);  // 07
             $day = substr($date, 2, 2); // 27
             $year = substr($date, 4, 4); // 2016
             $timestamp = mktime(0, 0, 0, $month, 1);
             $monthName = date('M', $timestamp);
             echo "<p class=\"post-meta\">" . $monthName . " " . $day . ", " . $year . "</p>";
             echo "</div>";
        if (++$counter == $numResults) {
            // dont add hr
        } else {
            echo "<hr>";
        }
         
     }

} else {
    echo "0 results.";
}

$conn->close();


?>