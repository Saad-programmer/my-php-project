<?php include('partials/_header.php') ?>

<!-- Sidebar -->
<?php include('partials/_sidebar.php') ?>
<!-- End of Sidebar -->

<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <?php include("partials/_navbar.php"); ?>
    <!-- End of Navbar -->

    <main>
        <div class="header">
            <h1>Users List</h1>
        </div>

        <div class="students-table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Section</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database connection
                    include('./partials/config.php');

                    // Fetch students from the database
                    $sql = "SELECT id, fname, lname, gender, class, section, dob, image, phone, email FROM students";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $count = 1;
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $count++ . "</td>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['fname'] . "</td>";
                            echo "<td>" . $row['lname'] . "</td>";
                            echo "<td>" . $row['gender'] . "</td>";
                            echo "<td>" . $row['section'] . "</td>";
                            echo "<td>" . date('Y-m-d', strtotime($row['dob'])) . "</td>"; // Formatting DOB
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='11'>No students found</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php include('partials/_footer.php'); ?>
