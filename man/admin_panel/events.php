<?php 
// Include header
include('partials/_header.php'); 

// Include database configuration
include('config.php');

// Handle form submission (event creation)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_event'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $imageName = $_FILES['file']['name'];
    $imageTmpName = $_FILES['file']['tmp_name'];
    $imageSize = $_FILES['file']['size'];
    $uploadDirectory = 'uploads/events/';
    $uploadPath = $uploadDirectory . basename($imageName);

    // Check if all fields are filled
    if (empty($title) || empty($body)) {
        $error_message = "All fields are required!";
    } elseif ($imageSize > 5242880) { // Check file size (limit: 5MB)
        $error_message = "File is too large, allowed limit is 5 MB!";
    } else {
        // Move uploaded file
        if (move_uploaded_file($imageTmpName, $uploadPath)) {
            // Insert event details into database
            $sql = "INSERT INTO events (title, body, image) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $title, $body, $imageName);

            if ($stmt->execute()) {
                $success_message = "Event created successfully!";
            } else {
                $error_message = "Error creating event: " . $stmt->error;
            }

            $stmt->close();
        } else {
            $error_message = "Error uploading image!";
        }
    }
}

// Fetch events from database for displaying
$events = [];
$sql = "SELECT * FROM events ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}

$conn->close();
?>

<!-- Show full event details -->
<div class="modal fade" id="eventModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="eventModalLabel" aria-hidden="true">
    <!-- Modal content as before -->
</div>

<!-- Edit Event Modal -->
<div class="modal" style="z-index: 2000;" id="edit-event" tabindex="-1" aria-labelledby="editEventLabel" aria-hidden="true">
    <!-- Modal content as before -->
</div>

<!-- Sidebar -->
<?php include('partials/_sidebar.php'); ?>
<input type="hidden" value="6" id="checkFileName">
<!-- End of Sidebar -->

<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <?php include("partials/_navbar.php"); ?>
    <!-- End of Navbar -->

    <main>
        <div class="header">
            <div class="left">
                <h1>Event Management</h1>
            </div>
        </div>

        <!-- Body -->
        <div class="bottom-data">
            <div class="orders">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="createEventTab" data-bs-toggle="tab" data-bs-target="#create"
                            type="button" role="tab" aria-controls="create" aria-selected="true">Create Event</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="show-events-tab" data-bs-toggle="tab" data-bs-target="#manage"
                            type="button" role="tab" aria-controls="manage" aria-selected="false">Event Board</button>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="create" role="tabpanel" aria-labelledby="create-tab" tabindex="0">
                        <div class="container">
                            <br>
                            <?php if (isset($error_message)): ?>
                                <div class="alert alert-danger"><?php echo $error_message; ?></div>
                            <?php elseif (isset($success_message)): ?>
                                <div class="alert alert-success"><?php echo $success_message; ?></div>
                            <?php endif; ?>
                            <form class="needs-validation" id="event-form" method="POST" enctype="multipart/form-data" novalidate>
                                <div class="center-element">
                                    <div class="eventform">
                                        <div class="mb-3">
                                            <label for="event-title" class="form-label">Event Title</label>
                                            <input type="text" class="form-control" id="event-title" name="title"
                                                placeholder="Title of the event" required>
                                            <div class="invalid-feedback" id="invalid-title">
                                                You must add a title!
                                            </div>
                                        </div>
                                        <br>

                                        <div class="mb-3">
                                            <label for="event-body" class="form-label">Event Description</label>
                                            <textarea class="form-control" id="event-body" name="body" rows="4"></textarea>
                                            <div class="invalid-feedback" id="invalid-body">
                                                You must add an event description or file!
                                            </div>
                                        </div>

                                        <br>
                                        <div class="mb-3">
                                            <label for="file" class="form-label">Event Image</label>
                                            <input type="file" class="form-control" accept="image/*" id="event-file"
                                                name="file">
                                            <p id="errorDisplay"></p>
                                            <div class="invalid-feedback" id="invalid-file">
                                                File is too large, allowed limit is 5 MB!
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="reset" class="btn btn-outline-warning" id="reset-event">&nbsp;&nbsp;Reset&nbsp;&nbsp;</button>
                                    <button type="submit" name="submit_event" class="btn btn-outline-success" id="post-event">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="manage" role="tabpanel" aria-labelledby="manage-tab" tabindex="0">
                        <div class="container">
                            <br>
                            <div class="eventTable" style="display: block;">
                                <div class="header">
                                    <i class='bx bx-clipboard'></i>
                                    <h3>Event Board</h3>
                                    <a href="eventboard.php"><i style="font-size:30px;font-weight:bold;" class='bx bx-plus'></i></a>
                                </div>
                                <hr class="text-danger">

                                <!-- Event cards -->
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3 row-cols-sm-1 g-4"
                                    id="event-box">
                                    <?php foreach ($events as $event): ?>
                                        <div class="col">
                                            <div class="card">
                                                <img src="uploads/events/<?php echo $event['image']; ?>" class="card-img-top" alt="Event Image">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $event['title']; ?></h5>
                                                    <p class="card-text"><?php echo substr($event['body'], 0, 100); ?>...</p>
                                                    <a href="#" class="btn btn-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include('partials/_footer.php'); ?>
