<?php include("../assets/noSessionRedirect.php"); ?>
<?php include("./verifyRoleRedirect.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/1.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>School Management - Calendar</title>
</head>

<body>
    <div class='toast-container position-fixed text-success bottom-0 end-0 p-3'>
        <div id='liveToast' class='toast' role='alert' aria-live='assertive' aria-atomic='true' style="color:black;">
            <div class='d-flex'>
                <div class='toast-body' id="toast-alert-message"></div>
                <button type='button' class='btn-close me-2 m-auto text-danger' data-bs-dismiss='toast' aria-label='Close'></button>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <?php include('partials/_sidebar.php') ?>
    <input type="hidden" value="7" id="checkFileName">

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <?php include("partials/_navbar.php"); ?>
        <main>
            <div class="header">
                <div class="left">
                    <h1>Event Calendar</h1>
                </div>
            </div>

            <!-- Body -->
            <div class="bottom-data">
                <div class="calendar">
                    <div class="container">
                        <br>
                        <div class="calendar-header">
                            <i class='bx bx-calendar'></i>
                            <h3>Events Calendar</h3>
                        </div>
                        <hr>

                        <!-- Event Filter -->
                        <div class="container event-filter">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="classFilter" class="col-form-label">Class</label>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select" id="classFilter">
                                        <?php include('partials/select_classes.php') ?>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <label for="sectionFilter" class="col-form-label">Section</label>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select" id="sectionFilter">
                                        <option selected>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary" id="filterBtn">
                                        <i class='bx bx-search-alt'></i> Filter
                                    </button>
                                </div>
                            </div>
                        </div>

                        <hr><br>

                        <!-- Calendar View -->
                        <div class="container calendar-container">
                            <div class="calendar-navigation">
                                <button type="button" class="btn btn-secondary" id="prevMonthBtn">Previous</button>
                                <h3 id="currentMonth">October 2024</h3>
                                <button type="button" class="btn btn-secondary" id="nextMonthBtn">Next</button>
                            </div>
                            <br>
                            <table class="table table-bordered" id="eventCalendar">
                                <thead>
                                    <tr>
                                        <th>Sunday</th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Calendar days will be dynamically loaded here -->
                                </tbody>
                            </table>
                        </div>

                        <!-- Event Details -->
                        <div class="container event-details">
                            <h3>Event Details</h3>
                            <div class="event-form">
                                <form id="eventForm">
                                    <div class="mb-3">
                                        <label for="eventTitle" class="form-label">Event Title</label>
                                        <input type="text" class="form-control" id="eventTitle" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="eventDate" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="eventDate" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="eventTime" class="form-label">Time</label>
                                        <input type="time" class="form-control" id="eventTime" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="eventDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="eventDescription" rows="3"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-success" id="saveEventBtn">
                                        <i class='bx bx-save'></i> Save Event
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Event List -->
                        <div class="container event-list">
                            <h3>Upcoming Events</h3>
                            <ul class="list-group" id="eventList">
                                <!-- Dynamic event list will appear here -->
                            </ul>
                        </div>

                        <div class="container last-edited mt-3">
                            <p>Last edited by <span id="lastEditor"></span></p>
                            <small id="editingTime"></small>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="../assets/js/calendar.js"></script>
    <?php include('partials/_footer.php'); ?>
</body>

</html>
