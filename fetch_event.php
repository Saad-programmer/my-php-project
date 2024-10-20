<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
$conn->connect_error && die("Connection failed: " . $conn->connect_error);

// SQL query to fetch the event name where id = 2
$sql = "SELECT * FROM events where id =4";
$result = $conn->query($sql);

// Fetch the event name directly
$row = $result->fetch_assoc();
$eventName = $row['event_name'];
$eventDescription = $row['description'];
$skill1 = $row['skill1'];
$skill2 = $row['skill2'];
$skill3 = $row['skill3'];
$instructor = $row['instructor'];
$about = $row['about'];
$duration = $row['duration'];
$Language = $row['Language'];
$Level = $row['Level'];



$countSql = "SELECT COUNT(*) AS total_rows FROM events_att";
$countResult = $conn->query($countSql);

// Fetch the total count if the query is successful
if ($countResult) {
    $countRow = $countResult->fetch_assoc();
    $saad = $countRow['total_rows']; // Store the total number of rows in $saad
    echo "Total number of rows in events_att table: " . $saad; // Output the count
} else {
    echo "Error: " . $conn->error; // Output error message if the query fails
}



$conn->close();
?>
