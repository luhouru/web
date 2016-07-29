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


$sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         $date = $row["date"];
         
         $directory = "/void/".$date;
         
         echo "<a href='" . $directory . "'>";
         
         echo "<li><b>" . $row["title"]. "</b><br>" . $row["subtitle"]. "</a></li>";
         
     }
     echo "</ul>";
} else {
     echo "0 results.";
}


$conn->close();


?>