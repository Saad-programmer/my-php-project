<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $event_image = $_POST['event_image'];
    $description = $_POST['description'];
    $instructor = $_POST['instructor'];

    // Validate required fields (basic example)
    if (empty($event_name) || empty($event_date) || empty($event_time) || empty($instructor)) {
        echo "<script>alert('Please fill in all required fields.');</script>";
    } else {
        // Insert data into the database
        $query = "INSERT INTO events (event_name, event_date, event_time, event_image, description, instructor) 
                  VALUES ('$event_name', '$event_date', '$event_time', '$event_image', '$description', '$instructor')";

        if (mysqli_query($sqli, $query)) {
            echo "<script>alert('Event registration successful');</script>";
            header("Location: index.php"); // Redirect to a success page
        } else {
            echo "<script>alert('Error: " . mysqli_error($sqli) . "');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="http://cb.mitindia.edu/cb/workshopimages/cbi1.png">
    <title>Event Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Add your CSS styles here (you can copy your existing styles) */
        * {
            padding: 0;
            margin: 0;
            color: #1a1f36;
            box-sizing: border-box;
            word-wrap: break-word;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Ubuntu, sans-serif;
        }

        body {
            min-height: 100%;
            background-color: #ffffff;
        }

        h1 {
            letter-spacing: -1px;
        }

        a {
            color: #5469d4;
            text-decoration: unset;
        }

        .formbg {
            margin: 0px auto;
            width: 100%;
            max-width: 448px;
            background: white;
            border-radius: 4px;
            box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;
        }

        .field input {
            font-size: 16px;
            line-height: 28px;
            padding: 8px 16px;
            width: 100%;
            min-height: 44px;
            border: unset;
            border-radius: 4px;
            outline-color: rgb(84 105 212 / 0.5);
            background-color: rgb(255, 255, 255);
        }

        input[type="submit"] {
            background-color: rgb(84, 105, 212);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="formbg">
        <h1>Event Registration</h1>
        <form method="POST" action="">
            <div class="field">
                <label for="event_name">Event Name:</label>
                <input type="text" id="event_name" name="event_name" required>
            </div>
            <div class="field">
                <label for="event_date">Event Date:</label>
                <input type="date" id="event_date" name="event_date" required>
            </div>
            <div class="field">
                <label for="event_time">Event Time:</label>
                <input type="time" id="event_time" name="event_time" required>
            </div>
            <div class="field">
                <label for="event_image">Event Image URL:</label>
                <input type="url" id="event_image" name="event_image">
            </div>
            <div class="field">
                <label for="description">Description:</label>
                <textarea id="description" name="description"></textarea>
            </div>
            <div class="field">
                <label for="instructor">Instructor Name:</label>
                <input type="text" id="instructor" name="instructor" required>
            </div>
            <input type="submit" value="Register Event">
        </form>
    </div>
</body>

</html>
