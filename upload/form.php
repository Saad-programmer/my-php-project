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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Event</title>
</head>
<body>
    <h1>Upload Event Information</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="id">Event ID:</label>
        <input type="number" name="id" required>
        <br>

        <label for="event_name">Event Name:</label>
        <input type="text" name="event_name" required>
        <br>

        <label for="event_date">Event Date:</label>
        <input type="date" name="event_date" required>
        <br>

        <label for="event_time">Event Time:</label>
        <input type="time" name="event_time" required>
        <br>

        <label for="event_image">Select Image:</label>
        <input type="file" name="event_image" accept="image/*" required>
        <br>

        <label for="description">Description:</label>
        <textarea name="description" rows="4" required></textarea>
        <br>

        <label for="instructor">Instructor:</label>
        <input type="text" name="instructor" required>
        <br>

        <input type="submit" name="submit" value="Upload Event">
    </form>
</body>
</html>
