<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // Get the event details from the form
    $eventId = $_POST['id'];
    $eventName = $_POST['event_name'];
    $eventDate = $_POST['event_date'];
    $eventTime = $_POST['event_time'];
    $description = $_POST['description'];
    $instructor = $_POST['instructor'];

    // Read the image file into a binary string
    $image = $_FILES['event_image']['tmp_name'];
    $imageData = file_get_contents($image);

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO events (id, event_name, event_date, event_time, event_image, description, instructor) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issbibs", $eventId, $eventName, $eventDate, $eventTime, $imageData, $description, $instructor);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Event uploaded successfully.";
    } else {
        echo "Error uploading event: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>
