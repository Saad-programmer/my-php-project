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
            <h1>Upload PDF File</h1>
        </div>

        <div class="upload-form">
            <form action="upload_process.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="file">Select PDF file:</label>
                    <input type="file" class="form-control" name="file" id="file" accept="application/pdf" required>
                </div>
                <div class="form-group">
                    <label for="class">Section:</label>
                    <input type="text" class="form-control" name="class" id="class" required>
                </div>
                <div class="form-group">
                    <label for="subject">Program Language:</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>

        <div class="upload-status">
            <?php
            // Display upload status messages
            if (isset($_GET['upload'])) {
                if ($_GET['upload'] == 'success') {
                    echo "<div class='alert alert-success'>File uploaded successfully!</div>";
                } elseif ($_GET['upload'] == 'error') {
                    echo "<div class='alert alert-danger'>There was an error uploading the file.</div>";
                }
            }
            ?>
        </div>
    </main>
</div>

<?php include('partials/_footer.php'); ?>
