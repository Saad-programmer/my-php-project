<?php include('partials/_header.php'); ?>

<!-- Sidebar -->
<?php include('partials/_sidebar.php'); ?>
<!-- End of Sidebar -->

<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <?php include("partials/_navbar.php"); ?>
    <!-- End of Navbar -->

    <main>
        <div class="header">
            <h1>Syllabus List</h1>
        </div>

        <div class="syllabus-table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Section</th>
                        <th scope="col">Program Language</th>
                        <th scope="col">Download Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database connection
                    include('./partials/config.php');

                    // Fetch syllabus files from the database
                    $sql = "SELECT s_no, class, subject, file FROM syllabus";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['s_no']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['class']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['subject']) . "</td>";
                            
                            // Construct the download link; ensure it's an absolute path or a relative path from the document root
                            $filePath = htmlspecialchars($row['file']);
                            echo "<td><a href='download.php?file=" . urlencode($filePath) . "' class='btn btn-primary btn-sm'>Download</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No syllabus files found</td></tr>"; // Ensure correct colspan
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php include('partials/_footer.php'); ?>
