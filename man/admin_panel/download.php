<?php
// Include database connection
include('./partials/config.php');

// Check if the file parameter is set
if (isset($_GET['file'])) {
    // Sanitize the file input
    $file = urldecode($_GET['file']);
    
    // Verify the file path (you might want to restrict the directory for security)
    $filePath = '../syllabusUploads/' . basename($file); // Adjust the path based on your setup

    // Check if the file exists
    if (file_exists($filePath)) {
        // Set headers to trigger a download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        
        // Read the file and send it to the output buffer
        readfile($filePath);
        exit;
    } else {
        echo "Requested file not found.";
    }
} else {
    echo "No file specified.";
}
?>
