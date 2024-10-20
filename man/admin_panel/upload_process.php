<?php
// Include database connection
include('./partials/config.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file is uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // Get file details
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileType = $_FILES['file']['type'];
        
        // Define the target directory and file path
        $uploadFileDir = '../syllabusUploads/';
        $dest_path = $uploadFileDir . basename($fileName);

        // Check if the file is a PDF
        if ($fileType == 'application/pdf') {
            // Move the file to the upload directory
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                // Insert file information into the database
                $class = $_POST['class'];
                $subject = $_POST['subject'];

                $sql = "INSERT INTO syllabus (class, subject, file) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss",$class, $subject, $dest_path);

                if ($stmt->execute()) {
                    header("Location: upload.php?upload=success");
                } else {
                    header("Location: upload.php?upload=error");
                }

                // Close the statement
                $stmt->close();
            } else {
                header("Location: upload.php?upload=error");
            }
        } else {
            header("Location: upload.php?upload=error");
        }
    } else {
        header("Location: upload.php?upload=error");
    }
}

// Close the database connection
$conn->close();
?>
